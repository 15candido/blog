<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => "Personal",
            'slug' => "personal",
        ]);

        $family = Category::create([
            'name' => "Family",
            'slug' => "family",
        ]);

        $work = Category::create([
            'name' => "Work",
            'slug' => "work",
        ]);

        $hobbies = Category::create([
            'name' => "Hobbies",
            'slug' => "hobbies",
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-hobbies-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum 
                        aperiam nihil esse? Enim nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque 
                        nulla sunt saepe autem? Ipsum aspernatur dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus 
                        quis asperiores voluptates!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nesciunt, temporibus cum aperiam nihil esse? Enim 
                        nam veritatis culpa illo, expedita rem reiciendis corrupti reprehenderit? Eaque nulla sunt saepe autem? Ipsum aspernatur 
                        dolores vel veritatis atque, ab sint mollitia fugit magnam doloribus quis asperiores voluptates! Illum id tempore modi 
                        veniam iure minima molestias voluptatem fugiat numquam, cum exercitationem inventore blanditiis? Cumque sed architecto 
                        nostrum ducimus hic cum repellendus laborum nulla eos, vitae, assumenda corrupti qui, culpa quam est ea? Similique culpa 
                        amet nostrum nihil repellat velit quisquam, magni mollitia distinctio. Commodi corrupti doloribus corporis molestias culpa 
                        maiores odit tenetur veritatis. Eveniet ad quidem expedita id rem sit ducimus corrupti et sequi, inventore adipisci 
                        doloribus dolorum officiis excepturi nam ipsa quisquam? Laborum officiis earum pariatur eum quisquam hic itaque magnam 
                        fugit optio eius suscipit distinctio, aperiam perferendis exercitationem nihil eveniet voluptate doloremque laboriosam 
                        alias voluptatem? Reiciendis rem optio nam minima blanditiis? Voluptatibus est recusandae illo a fugit doloribus aut 
                        dignissimos laudantium. Molestias id sit, esse veritatis ex commodi quibusdam fuga error quasi sunt quo reprehenderit 
                        odit doloribus ipsam illum. Blanditiis, quae. Vitae totam doloribus minus necessitatibus assumenda magni ipsa quibusdam 
                        ipsam dolorum in itaque veniam qui aliquam a hic dicta error quidem cupiditate omnis nobis perferendis, modi voluptate 
                        saepe molestiae! Illum. Maxime magnam dolore corrupti nesciunt voluptatibus consequuntur ipsam dolorem, animi rerum 
                        blanditiis voluptates, veritatis doloremque distinctio quidem ea repellat modi ratione culpa voluptatum eum molestias 
                        quia ut facilis error. Repudiandae. Odit perferendis animi quae? Ipsam distinctio atque nostrum! Eos, ex facere, iure 
                        numquam, natus dolores odit aliquam fuga reprehenderit eligendi perferendis dolorum modi! Illum eos voluptatem rerum, 
                        accusantium alias deserunt? Harum repellendus voluptatum dolorum suscipit culpa? Omnis, nihil voluptas quo officiis 
                        aut dolore maxime? Libero fugit beatae, reiciendis commodi dolore eligendi dolores saepe reprehenderit, consequuntur 
                        sunt, omnis debitis est iure!'
        ]);
    }
}
