<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // News list (the page you already have)
    public function index()
    {
        $news = [
            [
                'id' => 1,
                'title' => 'New 1-Litre and 2-Litre Bottles Now Available',
                'summary' => 'We’ve introduced new bottle sizes to make Werex cooking oil more convenient...',
                'content' => 'We’ve launched new 1-litre and 2-litre bottles based on customer feedback. These sizes are ideal for households that cook daily. Available across our local distributors and through our home delivery program.',
            ],
            [
                'id' => 2,
                'title' => 'Weekend Discount on Bulk Orders',
                'summary' => 'Enjoy up to 10% off when you buy in bulk this weekend...',
                'content' => 'From Friday to Sunday, we’re offering 10% off on all bulk orders above 20 litres. Small shops, hotels, and restaurants can take advantage of this deal by ordering through our agents or online form.',
            ],
            [
                'id' => 3,
                'title' => 'Improved Oil Purification Process',
                'summary' => 'We’ve upgraded our filtering and refining process...',
                'content' => 'Our new purification setup removes impurities more efficiently, ensuring cleaner, clearer, and healthier cooking oil. This step enhances shelf life and flavor quality.',
            ],
            [
                'id' => 4,
                'title' => 'Free Home Delivery in Selected Areas',
                'summary' => 'Customers within our local delivery zones can now get free delivery...',
                'content' => 'We’re offering free home delivery for orders above 5 litres in specific localities. Delivery times are between 9 AM and 6 PM daily. Order through our local contact or website form.',
            ],
            [
                'id' => 5,
                'title' => 'Customer Awareness Campaign',
                'summary' => 'We’re helping customers identify pure cooking oil...',
                'content' => 'We’ve started a “Know Your Oil” campaign to educate households on choosing safe, pure cooking oil and understanding labeling and quality standards. Look out for our local events and flyers.',
            ],
        ];

        return view('news.index', compact('news'));
    }

    // Single news detail
    public function show($id)
    {
        $news = [
            1 => [
                'title' => 'New 1-Litre and 2-Litre Bottles Now Available',
                'content' => 'We’ve launched new 1-litre and 2-litre bottles based on customer feedback. These are ideal for small families and can now be found in most local stores. The bottles are eco-friendly and easy to handle.',
            ],
            2 => [
                'title' => 'Weekend Discount on Bulk Orders',
                'content' => 'Enjoy up to 10% off on all bulk orders above 20 litres. This promotion runs every weekend for small shops and restaurant owners.',
            ],
            3 => [
                'title' => 'Improved Oil Purification Process',
                'content' => 'Our upgraded oil refining process ensures higher purity levels and retains essential nutrients, offering customers a healthier product.',
            ],
            4 => [
                'title' => 'Free Home Delivery in Selected Areas',
                'content' => 'We now deliver for free to customers in select neighborhoods. Check our delivery map or call our local branch to confirm your location.',
            ],
            5 => [
                'title' => 'Customer Awareness Campaign',
                'content' => 'Through our “Know Your Oil” initiative, we aim to educate consumers on identifying pure cooking oil, reading packaging labels, and maintaining healthy kitchen practices.',
            ],
        ];

        if (!isset($news[$id])) {
            abort(404);
        }

        $item = $news[$id];
        return view('news.show', compact('item'));
    }
}
