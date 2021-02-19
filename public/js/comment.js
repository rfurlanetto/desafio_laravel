const APP_URL = 'http://localhost/desafio-laravel/public/';

$(document).ready(function () {
    getComments()
});

$(document).on('click', '.edit', function () {
    var commentId = $(this)[0].id;
    $.ajax({
        type: "GET",
        dataType: "json",
        url: `${APP_URL}getCommentById/${commentId}`,
        success: function (result) {
            if (result.status) {
                $(`textarea[id='${result.objComment.id}']`).html(result.objComment.comment);
                $(`div[id='${result.objComment.id}']`).removeAttr('hidden');
            }
            console.log(result);
        }
    });
});

$(document).on('click', '.sendEditComment', function () {
    var commentId = $(this)[0].id;
    var editComment = $(`textarea[id="${commentId}"]`).val();
    $.ajax({
        type: "POST",
        dataType: "json",
        url: `${APP_URL}updateComment`,
        data: {
            commentId: commentId,
            _token: $('input[name="_token"]').val(),
            editComment: editComment
        },
        success: function (result) {
            if (result.status) {
                getComments();
            }
        }
    });
});

$('#sendComment').on('click', function () {
    if ($('#textComment').val().length > 0) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: `${APP_URL}recordComment`,
            data: {
                comment: $('#textComment').val(),
                _token: $('input[name="_token"]').val(),
                movieId: $('#movieId').val()
            },
            success: function (result) {
                if (result.status) {
                    getComments();
                }
            }
        });
    }
});

function getComments() {
    var movieId = $('#movieId').val();
    var divComment = $('#comments');
    divComment.html('');
    var content = '';
    $.ajax({
        type: "GET",
        dataType: "json",
        url: `${APP_URL}getComment/${movieId}`,
        success: function (result) {
            if (result.status) {
                for (var i = 0; i < result.objComment.length; i++) {
                    content += `
                    <div class='scrollspy'>
                    <label><b>Anonymous</b></label>
                    <p>${result.objComment[i].comment}</p>
                    </div>
                    <div>
                    <a class='btn edit' id='${result.objComment[i].id}'>Edit Comment</a>
                    <div id='${result.objComment[i].id}' class="input-field col s12" hidden>
                        <textarea class="materialize-textarea" id='${result.objComment[i].id}'></textarea>
                        <a class="btn sendEditComment" id='${result.objComment[i].id}'>Send Edit Comment</a>
                    </div>
                    </div>
                    <hr style='margin-bottom: 20px;' />
                    `;
                }
                divComment.html(content);
            }
        }
    });
}