<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class Course_reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_review')->insert(
            [
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 1,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 1,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 1,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 1,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 2,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 2,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 2,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 2,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 3,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 3,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 3,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 3,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 4,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 4,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 4,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 4,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 5,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 5,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 5,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 5,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 6,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 6,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 6,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 6,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 7,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 7,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 7,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 7,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 8,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 8,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 8,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 8,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 9,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 9,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 9,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 9,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.',
                    'rate' => 5,
                    'course_id' => 10,
                    'student_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!',
                    'rate' => 5,
                    'course_id' => 10,
                    'student_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.',
                    'rate' => 5,
                    'course_id' => 11,
                    'student_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!',
                    'rate' => 5,
                    'course_id' => 12,
                    'student_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
