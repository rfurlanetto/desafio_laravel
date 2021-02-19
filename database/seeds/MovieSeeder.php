<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrMovies = [
            [
                'title' => 'Tenet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index.jpeg',
                'year' => '2020',
            ],
            [
                'title' => 'Red Dot',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index2.jpeg',
                'year' => '2021',
            ],
            [
                'title' => 'News world',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index3.jpeg',
                'year' => '2021',
            ],
            [
                'title' => 'The Map of Tiny Perfect Things',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index4.jpeg',
                'year' => '2021',
            ],
            [
                'title' => 'Resgate',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index5.jpeg',
                'year' => '2020',
            ],
            [
                'title' => 'Soul',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere tellus ut sapien fringilla, et dictum dui posuere. Quisque elementum pulvinar dolor a pulvinar. Pellentesque feugiat nunc nec massa pharetra egestas. Etiam non cursus justo, id hendrerit augue. Fusce malesuada quam a sagittis cursus. Pellentesque rhoncus, lorem a sodales congue, ante orci dictum urna, at vehicula neque purus vel diam. Suspendisse sed urna non tortor aliquet mollis in in nisi. Proin nec ipsum faucibus, vestibulum odio a, tristique ipsum. Donec interdum elementum enim, sed lacinia massa gravida nec. Donec at ante maximus, dapibus libero interdum, hendrerit sem. Nam ornare libero at urna blandit elementum. Fusce lectus erat, pellentesque molestie fermentum at, scelerisque pretium ex. Vivamus eleifend vel est a luctus. Cras accumsan semper mauris at varius. Vivamus laoreet, leo finibus venenatis venenatis, elit dui sollicitudin ligula, ac euismod nibh eros eget diam. Cras pellentesque interdum ornare.',
                'image' => 'index6.jpeg',
                'year' => '2020',
            ]
        ];

        foreach ($arrMovies as $movie) {
            DB::table('movie')->insert(
                [
                    'title' => $movie['title'],
                    'description' => $movie['description'],
                    'image' => $movie['image'],
                    'year' => $movie['year'],
                ]
            );
        }
    }
}
