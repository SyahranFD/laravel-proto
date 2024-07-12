<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'id' => 'user-'.fake()->uuid(),
            'full_name' => 'Tim William',
            'email' => 'tim@gmail.com',
            'password' => Hash::make('pass'),
            'age' => 20,
            'job' => 'Mobile Developer',
            'profile_picture' => 'https://images.pexels.com/photos/39866/entrepreneur-startup-start-up-man-39866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
        ]);

        $user1->userExpertise()->create(['id' => 'user-expertise-'.Str::uuid(),
            'name' => 'Java']);
        $user1->userExpertise()->create(['id' => 'user-expertise-'.Str::uuid(),
            'name' => 'Kotlin']);
        $user1->userExpertise()->create(['id' => 'user-expertise-'.Str::uuid(),
            'name' => 'Flutter']);

        $user1->userPortfolioPlatform()->create(['id' => 'user-portofolio-'.Str::uuid(),
            'name' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/fattah-anggit-al-dzakwan',]);
        $user1->userPortfolioPlatform()->create(['id' => 'user-portofolio-'.Str::uuid(),
            'name' => 'GitHub',
            'url' => 'https://github.com/Fadzaa',]);

        $user2 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/837358/pexels-photo-837358.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user3 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => '3D Animator', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/445109/pexels-photo-445109.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user4 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/240561/pexels-photo-240561.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user5 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/699459/pexels-photo-699459.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user6 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/1245055/pexels-photo-1245055.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user7 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/746386/pexels-photo-746386.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user8 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/845457/pexels-photo-845457.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user9 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/762527/pexels-photo-762527.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user10 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/571169/pexels-photo-571169.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user11 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/819530/pexels-photo-819530.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user12 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/1134188/pexels-photo-1134188.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user13 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/982263/pexels-photo-982263.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user14 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/382177/pexels-photo-382177.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user15 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/427900/pexels-photo-427900.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user16 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/772662/pexels-photo-772662.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user17 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/709143/pexels-photo-709143.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user18 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/1732370/pexels-photo-1732370.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user19 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/1530423/pexels-photo-1530423.jpeg?auto=compress&cs=tinysrgb&w=800',]);
        $user20 = User::create(['id' => 'user-'.fake()->uuid(), 'full_name' => fake()->name(), 'email' => fake()->email(), 'password' => Hash::make('pass'), 'age' => 20, 'job' => 'Web Developer', 'profile_background' => 'https://images.pexels.com/photos/691710/pexels-photo-691710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'profile_picture' => 'https://images.pexels.com/photos/1309687/pexels-photo-1309687.jpeg?auto=compress&cs=tinysrgb&w=800',]);

        // 1. E-Commerce Website
        $project1 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user2->id,
            'title' => 'Making E-Commerce Website',
            'description' => 'We are looking for a team to make an e-commerce website. We need a frontend developer, backend developer, and UI/UX designer.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project1->projectSkill()->create(['name' => 'Frontend Developer', 'is_available' => false, 'id' => 'project-skill-'.Str::uuid()]);
        $project1->projectSkill()->create(['name' => 'Backend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project1->projectSkill()->create(['name' => 'UI/UX', 'id' => 'project-skill-'.Str::uuid()]);

        $project1->projectTool()->create(['name' => 'React', 'id' => 'project-tool-'.Str::uuid()]);
        $project1->projectTool()->create(['name' => 'Laravel', 'id' => 'project-tool-'.Str::uuid()]);
        $project1->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);

        $project1->projectMember()->create(['user_id' => $user3->id, 'expertise' => 'Frontend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project1->projectMember()->create(['user_id' => $user4->id, 'expertise' => 'Frontend Developer', 'id' => 'project-member-'.Str::uuid()]);

        // 2. Mobile App Development
        $project2 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user5->id,
            'title' => 'Mobile App for Health Tracking',
            'description' => 'We are building a mobile app to track health metrics. We need an Android developer, iOS developer, and a UI/UX designer.',
            'max_participant' => 3,
            'category' => 'Software Development',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/6298479/pexels-photo-6298479.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => true,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project2->projectSkill()->create(['name' => 'Android Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project2->projectSkill()->create(['name' => 'iOS Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project2->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project2->projectTool()->create(['name' => 'Kotlin', 'id' => 'project-tool-'.Str::uuid()]);
        $project2->projectTool()->create(['name' => 'Swift', 'id' => 'project-tool-'.Str::uuid()]);
        $project2->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);

        $project2->projectMember()->create(['user_id' => $user1->id, 'expertise' => 'Android Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project2->projectMember()->create(['user_id' => $user6->id, 'expertise' => 'iOS Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project2->projectMember()->create(['user_id' => $user17->id, 'expertise' => 'UI/UX Designer', 'id' => 'project-member-'.Str::uuid()]);

        // 3. Graphic Design Portfolio
        $project3 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user7->id,
            'title' => 'Graphic Design Portfolio',
            'description' => 'We are creating a portfolio for graphic designers. We need a graphic designer and a web developer.',
            'max_participant' => 3,
            'category' => 'Design',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/69432/pexels-photo-69432.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => true,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project3->projectSkill()->create(['name' => 'Graphic Designer', 'id' => 'project-skill-'.Str::uuid()]);
        $project3->projectSkill()->create(['name' => 'Web Developer', 'id' => 'project-skill-'.Str::uuid()]);

        $project3->projectTool()->create(['name' => 'Adobe Illustrator', 'id' => 'project-tool-'.Str::uuid()]);
        $project3->projectTool()->create(['name' => 'Adobe Photoshop', 'id' => 'project-tool-'.Str::uuid()]);
        $project3->projectTool()->create(['name' => 'WordPress', 'id' => 'project-tool-'.Str::uuid()]);

        $project3->projectMember()->create(['user_id' => $user8->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project3->projectMember()->create(['user_id' => $user9->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project3->projectMember()->create(['user_id' => $user10->id, 'expertise' => 'Web Developer', 'id' => 'project-member-'.Str::uuid()]);

        // 4. UI/UX Case Study
        $project4 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user11->id,
            'title' => 'UI/UX Case Study for a Social Media App',
            'description' => 'We are doing a case study for a social media app. We need a UI/UX researcher and a UI/UX designer.',
            'max_participant' => 4,
            'category' => 'Design',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project4->projectSkill()->create(['name' => 'UI/UX Researcher', 'id' => 'project-skill-'.Str::uuid()]);
        $project4->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project4->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);
        $project4->projectTool()->create(['name' => 'Adobe XD', 'id' => 'project-tool-'.Str::uuid()]);

        $project4->projectMember()->create(['user_id' => $user12->id, 'expertise' => 'UI/UX Researcher', 'id' => 'project-member-'.Str::uuid()]);
        $project4->projectMember()->create(['user_id' => $user13->id, 'expertise' => 'UI/UX Designer', 'id' => 'project-member-'.Str::uuid()]);

        // 5. 3D Animation Portfolio
        $project5 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user14->id,
            'title' => '3D Animation Portfolio',
            'description' => 'We are creating a portfolio for 3D animators. We need a 3D modeler, animator, and sound designer.',
            'max_participant' => 3,
            'category' => '3D Animation',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/17485683/pexels-photo-17485683/free-photo-of-an-artist-s-illustration-of-artificial-intelligence-ai-this-illustration-depicts-how-ai-could-be-used-in-the-field-of-sustainability-from-biodiversity-to-climate-it-was-created-by-nidi.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project5->projectSkill()->create(['name' => '3D Modeler', 'id' => 'project-skill-'.Str::uuid()]);

        $project5->projectTool()->create(['name' => 'Maya', 'id' => 'project-tool-'.Str::uuid()]);

        $project5->projectMember()->create(['user_id' => $user15->id, 'expertise' => '3D Modeler', 'id' => 'project-member-'.Str::uuid()]);
        $project5->projectMember()->create(['user_id' => $user16->id, 'expertise' => '3D Modeler', 'id' => 'project-member-'.Str::uuid()]);
        $project5->projectMember()->create(['user_id' => $user17->id, 'expertise' => '3D Modeler', 'id' => 'project-member-'.Str::uuid()]);

        // 6. 2D Animation Educational Video
        $project6 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user18->id,
            'title' => '2D Animation Educational Video',
            'description' => 'We are creating an educational video using 2D animation. We need a 2D animator, scriptwriter, and a voice-over artist.',
            'max_participant' => 4,
            'category' => '2D Animation',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project6->projectSkill()->create(['name' => '2D Animator', 'id' => 'project-skill-'.Str::uuid()]);
        $project6->projectSkill()->create(['name' => 'Scriptwriter', 'id' => 'project-skill-'.Str::uuid()]);
        $project6->projectSkill()->create(['name' => 'Voice-Over Artist', 'id' => 'project-skill-'.Str::uuid()]);

        $project6->projectTool()->create(['name' => 'Toon Boom Harmony', 'id' => 'project-tool-'.Str::uuid()]);
        $project6->projectTool()->create(['name' => 'Adobe Animate', 'id' => 'project-tool-'.Str::uuid()]);
        $project6->projectTool()->create(['name' => 'Audacity', 'id' => 'project-tool-'.Str::uuid()]);

        $project6->projectMember()->create(['user_id' => $user19->id, 'expertise' => '2D Animator', 'id' => 'project-member-'.Str::uuid()]);
        $project6->projectMember()->create(['user_id' => $user20->id, 'expertise' => '2D Animator', 'id' => 'project-member-'.Str::uuid()]);

        // 7. E-Learning Platform
        $project7 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user9->id,
            'title' => 'E-Learning Platform Development',
            'description' => 'We are building an e-learning platform. We need a full-stack developer, content creator, and UI/UX designer.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/4050315/pexels-photo-4050315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project7->projectSkill()->create(['name' => 'Full-Stack Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project7->projectSkill()->create(['name' => 'Content Creator', 'id' => 'project-skill-'.Str::uuid()]);
        $project7->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project7->projectTool()->create(['name' => 'React', 'id' => 'project-tool-'.Str::uuid()]);
        $project7->projectTool()->create(['name' => 'Node.js', 'id' => 'project-tool-'.Str::uuid()]);
        $project7->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);

        $project7->projectMember()->create(['user_id' => $user2->id, 'expertise' => 'Full-Stack Developer', 'id' => 'project-member-'.Str::uuid()]);

        // 8. Mobile Game Development
        $project8 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user3->id,
            'title' => 'Mobile Game Development',
            'description' => 'We are developing a mobile game. We need a game developer, graphic designer, and sound designer.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/228963/pexels-photo-228963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'is_finish' => true,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project8->projectSkill()->create(['name' => 'Game Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project8->projectSkill()->create(['name' => 'Graphic Designer', 'id' => 'project-skill-'.Str::uuid()]);
        $project8->projectSkill()->create(['name' => 'Sound Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project8->projectTool()->create(['name' => 'Unity', 'id' => 'project-tool-'.Str::uuid()]);
        $project8->projectTool()->create(['name' => 'Photoshop', 'id' => 'project-tool-'.Str::uuid()]);
        $project8->projectTool()->create(['name' => 'Audacity', 'id' => 'project-tool-'.Str::uuid()]);

        $project8->projectMember()->create(['user_id' => $user17->id, 'expertise' => 'Game Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project8->projectMember()->create(['user_id' => $user18->id, 'expertise' => 'Game Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project8->projectMember()->create(['user_id' => $user15->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project8->projectMember()->create(['user_id' => $user4->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project8->projectMember()->create(['user_id' => $user5->id, 'expertise' => 'Sound Designer', 'id' => 'project-member-'.Str::uuid()]);

        // 9. Branding for Startups
        $project9 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user12->id,
            'title' => 'Branding for Startups',
            'description' => 'We are creating branding materials for startups. We need a graphic designer, content writer, and marketing specialist.',
            'max_participant' => 4,
            'category' => 'Design',
            'is_paid' => false,
            'image' => 'https://images.pexels.com/photos/2422407/pexels-photo-2422407.jpeg?auto=compress&cs=tinysrgb&w=800',
            'is_finish' => true,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project9->projectSkill()->create(['name' => 'Graphic Designer', 'id' => 'project-skill-'.Str::uuid()]);
        $project9->projectSkill()->create(['name' => 'Content Writer', 'id' => 'project-skill-'.Str::uuid()]);
        $project9->projectSkill()->create(['name' => 'Marketing Specialist', 'id' => 'project-skill-'.Str::uuid()]);

        $project9->projectTool()->create(['name' => 'Illustrator', 'id' => 'project-tool-'.Str::uuid()]);
        $project9->projectTool()->create(['name' => 'Photoshop', 'id' => 'project-tool-'.Str::uuid()]);
        $project9->projectTool()->create(['name' => 'WordPress', 'id' => 'project-tool-'.Str::uuid()]);

        $project9->projectMember()->create(['user_id' => $user10->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project9->projectMember()->create(['user_id' => $user6->id, 'expertise' => 'Graphic Designer', 'id' => 'project-member-'.Str::uuid()]);
        $project9->projectMember()->create(['user_id' => $user14->id, 'expertise' => 'Content Writer', 'id' => 'project-member-'.Str::uuid()]);
        $project9->projectMember()->create(['user_id' => $user8->id, 'expertise' => 'Marketing Specialist', 'id' => 'project-member-'.Str::uuid()]);

        // 10. Redesigning a Corporate Website
        $project10 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user20->id,
            'title' => 'Redesigning a Corporate Website',
            'description' => 'We are redesigning a corporate website. We need a frontend developer, backend developer, and UI/UX designer.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project10->projectSkill()->create(['name' => 'Frontend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project10->projectSkill()->create(['name' => 'Backend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project10->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project10->projectTool()->create(['name' => 'React', 'id' => 'project-tool-'.Str::uuid()]);
        $project10->projectTool()->create(['name' => 'Laravel', 'id' => 'project-tool-'.Str::uuid()]);
        $project10->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);

        $project10->projectMember()->create(['user_id' => $user11->id, 'expertise' => 'Frontend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project10->projectMember()->create(['user_id' => $user4->id, 'expertise' => 'Backend Developer', 'id' => 'project-member-'.Str::uuid()]);

        // 11. Interactive UI for a News App
        $project11 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user7->id,
            'title' => 'Interactive UI for a News App',
            'description' => 'We are developing an interactive UI for a news application. We need a UI/UX designer, frontend developer, and a content manager.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project11->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);
        $project11->projectSkill()->create(['name' => 'Frontend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project11->projectSkill()->create(['name' => 'Content Manager', 'id' => 'project-skill-'.Str::uuid()]);

        $project11->projectTool()->create(['name' => 'Figma', 'id' => 'project-tool-'.Str::uuid()]);
        $project11->projectTool()->create(['name' => 'React', 'id' => 'project-tool-'.Str::uuid()]);
        $project11->projectTool()->create(['name' => 'WordPress', 'id' => 'project-tool-'.Str::uuid()]);

        $project11->projectMember()->create(['user_id' => $user13->id, 'expertise' => 'UI/UX Designer', 'id' => 'project-member-'.Str::uuid()]);

        // 12. 3D Game Character Design
        $project12 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user17->id,
            'title' => '3D Game Character Design',
            'description' => 'We are designing 3D characters for a game. We need a 3D modeler, texture artist, and animator.',
            'max_participant' => 5,
            'category' => '3D Animation',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project12->projectSkill()->create(['name' => '3D Modeler', 'id' => 'project-skill-'.Str::uuid()]);
        $project12->projectSkill()->create(['name' => 'Texture Artist', 'id' => 'project-skill-'.Str::uuid()]);
        $project12->projectSkill()->create(['name' => 'Animator', 'id' => 'project-skill-'.Str::uuid()]);

        $project12->projectTool()->create(['name' => 'Blender', 'id' => 'project-tool-'.Str::uuid()]);
        $project12->projectTool()->create(['name' => 'Maya', 'id' => 'project-tool-'.Str::uuid()]);
        $project12->projectTool()->create(['name' => 'Substance Painter', 'id' => 'project-tool-'.Str::uuid()]);

        $project12->projectMember()->create(['user_id' => $user4->id, 'expertise' => '3D Modeler', 'id' => 'project-member-'.Str::uuid()]);

        // 13. 2D Animation for a Music Video
        $project13 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user2->id,
            'title' => '2D Animation for a Music Video',
            'description' => 'We are creating a 2D animated music video. We need a 2D animator, storyboard artist, and a sound designer.',
            'max_participant' => 4,
            'category' => '2D Animation',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project13->projectSkill()->create(['name' => '2D Animator', 'id' => 'project-skill-'.Str::uuid()]);
        $project13->projectSkill()->create(['name' => 'Storyboard Artist', 'id' => 'project-skill-'.Str::uuid()]);
        $project13->projectSkill()->create(['name' => 'Sound Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project13->projectTool()->create(['name' => 'Toon Boom Harmony', 'id' => 'project-tool-'.Str::uuid()]);
        $project13->projectTool()->create(['name' => 'Adobe Animate', 'id' => 'project-tool-'.Str::uuid()]);
        $project13->projectTool()->create(['name' => 'Audacity', 'id' => 'project-tool-'.Str::uuid()]);

        $project13->projectMember()->create(['user_id' => $user9->id, 'expertise' => '2D Animator', 'id' => 'project-member-'.Str::uuid()]);
        $project13->projectMember()->create(['user_id' => $user12->id, 'expertise' => 'Storyboard Artist', 'id' => 'project-member-'.Str::uuid()]);

        // 14. Website for Local Business
        $project14 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user2->id,
            'title' => 'Website for Local Business',
            'description' => 'We are creating a website for a local business. We need a frontend developer, backend developer, and content writer.',
            'max_participant' => 5,
            'category' => 'Software Development',
            'is_paid' => false,
            'is_finish' => true,
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project14->projectSkill()->create(['name' => 'Frontend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project14->projectSkill()->create(['name' => 'Backend Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project14->projectSkill()->create(['name' => 'Content Writer', 'id' => 'project-skill-'.Str::uuid()]);

        $project14->projectTool()->create(['name' => 'React', 'id' => 'project-tool-'.Str::uuid()]);
        $project14->projectTool()->create(['name' => 'Laravel', 'id' => 'project-tool-'.Str::uuid()]);
        $project14->projectTool()->create(['name' => 'WordPress', 'id' => 'project-tool-'.Str::uuid()]);

        $project14->projectMember()->create(['user_id' => $user4->id, 'expertise' => 'Frontend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project14->projectMember()->create(['user_id' => $user12->id, 'expertise' => 'Frontend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project14->projectMember()->create(['user_id' => $user13->id, 'expertise' => 'Backend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project14->projectMember()->create(['user_id' => $user20->id, 'expertise' => 'Backend Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project14->projectMember()->create(['user_id' => $user11->id, 'expertise' => 'Content Writer', 'id' => 'project-member-'.Str::uuid()]);

        // 15. Mobile App for Event Management
        $project15 = Project::create([
            'id' => 'project-'.fake()->uuid(),
            'user_id' => $user1->id,
            'title' => 'Mobile App for Event Management',
            'description' => 'We are building a mobile app for event management. We need an Android developer, iOS developer, and a UI/UX designer.',
            'max_participant' => 6,
            'category' => 'Software Development',
            'is_paid' => false,
            'is_finish' => false,
            'room_id' => 'room-'.Str::uuid(),
        ]);

        $project15->projectSkill()->create(['name' => 'Android Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project15->projectSkill()->create(['name' => 'iOS Developer', 'id' => 'project-skill-'.Str::uuid()]);
        $project15->projectSkill()->create(['name' => 'UI/UX Designer', 'id' => 'project-skill-'.Str::uuid()]);

        $project15->projectTool()->create(['name' => 'Kotlin', 'id' => 'project-tool-'.Str::uuid()]);
        $project15->projectTool()->create(['name' => 'Swift', 'id' => 'project-tool-'.Str::uuid()]);
        $project15->projectTool()->create(['name' => 'Sketch', 'id' => 'project-tool-'.Str::uuid()]);

        $project15->projectMember()->create(['user_id' => $user2->id, 'expertise' => 'Android Developer', 'id' => 'project-member-'.Str::uuid()]);
        $project15->projectMember()->create(['user_id' => $user16->id, 'expertise' => 'iOS Developer', 'id' => 'project-member-'.Str::uuid()]);
    }
}
