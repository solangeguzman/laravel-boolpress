<?php
use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //   
     for ($i = 0; $i <50; $i++){
       $postObject = new Post();
       $postObject->title= $faker->sentence(10);
       $postObject->imagen= $faker->imageUrl(640,480,'posts',true);
       $postObject->data= $faker->dateTime();
       $postObject->price= $faker->randomFloat(2,5,100);
       $postObject->save();
    }


// $posts=[
//           'title'=>'Notte stellata',
//           'imagen'=> 'http://lh6.ggpht.com/HlgucZ0ylJAfZgusynnUwxNIgIp5htNhShF559x3dRXiuy_UdP3UQVLYW6c=w454-h300-n-l64',
//           'data' => '1889-06-01',
//           'price'=> '5.000',
//         ];
        
//         [
//             'title'=>'Il bacio',
//             'imagen'=> 'http://lh4.ggpht.com/UuYCUnqvo2EIZhyFHYFVLbkmma_cubVk7SwxOF3lklT6aor5647BXVhEaFB7jg=w298-h300-n-l64',
//             'data' => '1907-06-01',
//             'price'=> '6.000',
//         ];

//         [
//             'title'=>'La persistenza della memoria',
//             'imagen'=> 'https://m.media-amazon.com/images/I/5152BzKdYTL._AC_.jpg',
//             'data' => '1934-01-01',
//             'price'=> '7.000',
//         ];

//         foreach($posts as $post){
//             $postObject= new Post();
//             $postObject->title = $post['title'];
//             $postObject->imagen= $post['imagen'];
//             $postObject->data= $post['data'];
//             $postObject->price= $post['price'];
//             $postObject->save();
//         }

    }
}
