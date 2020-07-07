<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([

            'imagePath' => 'https://kbimages1-a.akamaihd.net/bd38973b-e6f1-4df6-a13e-219449e2e017/353/569/90/False/girl-woman-other-1.jpg',
            'title' => 'Girl, Woman, Other',
            'description' => 'Exceptional. You have to order it right now. This is Britain as you have never read it. This is Britain as it has never been told.',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41tjS2DPOZL._SX324_BO1,204,203,200_.jpg',
            'title' => 'Normal People',
            'description' => 'Normal People is a story of mutual fascination, friendship and love. It takes us from that first conversation to the years beyond, in the company of two people who try to stay apart but find they can not',
            'price' => 25
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://kbimages1-a.akamaihd.net/c2bb3db2-40f0-4dcb-b41e-aaac8681de8c/353/569/90/False/where-the-crawdads-sing.jpg',
            'title' => 'Where the Crawdads Sing',
            'description' => "It will reach a huge audience though the writer's old-fashioned talents for compelling character, plotting and landscape description.",
            'price' => 29
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81BCG3dn-0L.jpg',
            'title' => 'The Silent Patient',
            'description' => "Alicia Berenson lived a seemingly perfect life until one day six years ago. When she shot her husband in the head five times. Since then she hasn't spoken a single word. It's time to find out why.",
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71pzdpokyML.jpg',
            'title' => 'Invisible Women',
            'description' => "Imagine a world where... * Your phone is too big for your hand * Your doctor prescribes a drug that is wrong for your body * In a car accident you are 47% more likely to be injured. If any of that sounds familiar, chances are you're a woman. You have to read it",
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://i.pinimg.com/474x/54/21/c6/5421c61640164961c7af16894fd79aad--no-matter-what-book-lists.jpg',
            'title' => 'We Should All Be Feminists',
            'description' => 'I would like to ask that we begin to dream about and plan for a different world. A fairer world. A world of happier men and happier women who are truer to themselves.',
            'price' => 7
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://cdn2.penguin.com.au/covers/original/9781787331297.jpg',
            'title' => 'Difficult Women',
            'description' => "Well-behaved women don't make history: difficult women do. Helen Lewis argues that feminism's success is down to complicated, contradictory, imperfect women, who fought each other as well as fighting for equal rights. Too many of these pioneers have been whitewashed or forgotten in our modern search for feel-good, inspirational heroines. It's time to reclaim the history of feminism.",
            'price' => 21
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://cdn.shopify.com/s/files/1/0376/3057/4729/products/9780735224315_ade3a_1296x.jpg?v=1587193076',
            'title' => 'Little Fires Everywhere',
            'description' => "Just read it...Outstanding. To say I love this book is an understatement...It moved me to tears. Beautifully written, completely charming, and extremely wise on the subject of adolescence and influence. Discover the novel that everybody is talking about. This is the book of the moment.",
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81pNl+KfPbL.jpg',
            'title' => 'This is Going to Hurt',
            'description' => "Painfully funny. The pain and the funniness somehow add up to something entirely good, entirely noble and entirely loveable. Welcome to the life of a junior doctor: 97-hour weeks, life and death decisions, a constant tsunami of bodily fluids, and the hospital parking meter earns more than you.",
            'price' => 9
        ]);
        $product->save();

    }
}