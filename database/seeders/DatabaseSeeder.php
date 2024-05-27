<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Angga M E',
            'username' => 'ame',
            'email' => 'angga123@gmail.com',
            'password' => bcrypt('ame123')
        ]);
        User::create([
            'name' => 'Hamid Zaki',
            'username' => 'kitut',
            'email' => 'hamidzaki14@gmail.com',
            'password' => bcrypt('hzr123')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Pogramming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae, iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas. Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!',
    //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae,</p><p> iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas.</p> <p> Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul kedua',
    //         'slug' => 'judul-ke-dua',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae, iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas. Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!',
    //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae,</p><p> iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas.</p> <p> Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judul-ke-tiga',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae, iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas. Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!',
    //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae,</p><p> iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas.</p> <p> Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!</p>',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul keempat',
    //         'slug' => 'judul-ke-empat',
    //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae, iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas. Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!',
    //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dignissimos ullam alias molestiae nihil dolorum, ratione dolores officia tenetur laboriosam commodi obcaecati quaerat? Accusamus omnis eligendi culpa officia esse nemo laboriosam error quasi recusandae,</p><p> iusto ipsam tenetur consequuntur quo officiis fuga dolores dolorum similique praesentium doloribus voluptatum molestias. Ab ex nam sunt harum laboriosam, voluptatibus repellendus? Sed id suscipit dolorum? Aperiam laboriosam temporibus quam eaque cumque ipsa quis explicabo assumenda veritatis delectus nisi dicta aspernatur beatae inventore, expedita aut odio distinctio necessitatibus? Reiciendis repellat eveniet accusantium quo nihil aliquam repellendus dolores eligendi error ipsam quod minus nobis odio a, non modi! Sed, cumque ad beatae optio atque corporis, deleniti odio natus mollitia laboriosam culpa animi fugit. Voluptate deserunt tempora soluta ullam necessitatibus quae enim, suscipit veniam iste corporis, aliquam pariatur impedit alias minus dolorum in doloremque exercitationem optio quas.</p> <p> Doloribus ducimus necessitatibus pariatur dignissimos illo officiis hic ipsa consequuntur ullam id impedit fuga fugit veritatis labore tenetur, iste placeat error vitae repellat animi! Quisquam iste amet aperiam autem culpa? Quisquam nam hic magnam accusamus praesentium deserunt consequatur quibusdam et minima pariatur. Modi eos, dicta libero qui molestias velit a consectetur, voluptates mollitia nesciunt, natus deleniti nulla illo rerum blanditiis autem!</p>',
    //         'category_id' => 1,
    //         'user_id' => 2
    //     ]);
    }
}
