<?php


$map = [
    '1' => 'movies_count',
    '2' => 'movies_since',
    '3' => 'list_of_movies',
    '4' => 'movies_by',
    '5' => 'movies_with_awards',
    '6' => 'movies_with_awards_and_since'
];


$data = json_decode(file_get_contents("movies.json"), true);


function movies_count(array $movies): int
{
    return count($movies);
}


function movies_since(array $movies, int $year): array
{
    return array_filter($movies, fn (array $movie) => $movie['Year'] > $year);
}


function list_of_movies(array $movies): array
{
    return array_map(fn (array $movies) => $movies['Title'], $movies);
}


function movies_by(array $movies, string $director): array
{
    return array_filter($movies, fn (array $movie) => $movie['Director'] === $director);
}


function movies_with_awards(array $movies): array
{
    return array_filter($movies, fn (array $movies) => $movies['Awards'] === 'Yes');
}

function movies_with_subject(array $movies, string $subject): array
{
    return array_filter($movies, fn (array $movie) => $movie['Subject'] === $subject);
}


function movies_with_awards_and_since(array $movies, string $subject, int $year ): array
{
    return movies_since(movies_with_subject($movies, $subject), $year);
}


$queryNumber = $argv[1];
$argumens = array_slice($argv, 2);
$fn = $map[$queryNumber];
// var_dump($fn($data, ...$argumens));
