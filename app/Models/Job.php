<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => '50000€'
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => '55000€'
            ],
            [
                'id' => 3,
                'title' => 'JavaScript Developer',
                'salary' => '52000€'
            ],
            [
                'id' => 4,
                'title' => 'Java Developer',
                'salary' => '58000€'
            ],
            [
                'id' => 5,
                'title' => 'Ruby Developer',
                'salary' => '54000€'
            ],
        ];
    }

    public static function find($id): array
    {
        // $jobs = static::all();
        $jobs = self::all();
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
