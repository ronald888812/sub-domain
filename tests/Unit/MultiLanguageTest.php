<?php

namespace Tests\Unit;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Tests\TestCase;
use PHPUnit\Framework\TestCase;

class MultiLanguageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    /**
     * Test MutliLanguage Trait.
     *
     * @return void
     */
    public function testMultiLanguageAttribute()
    {
        $category = new Category;
        $category->fill(['title_ar' => 'منشور', 'title_en' => 'Post']);
        App::setLocale('ar');
        $this->assertEquals($category->title, 'منشور');
App::setLocale('en');
        $this->assertEquals($category->title, 'Post');
    }
}
