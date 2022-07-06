<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function list_of_ideas_shows_on_main_page_test(){
        /**arrange**/
        $ideaOne = Idea::factory()->create([
           'title'=> 'My First Idea',
           'description'=> 'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title'=> 'My Second Idea',
            'description'=> 'Description of my second idea',
        ]);

        /**act**/
        $response = $this->get(route('idea.index'));

        /**assert**/
        $response->assertSuccessful();

        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);

        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    public function single_idea_shows_correctly_on_the_show_page_test(){
        /**arrange**/
        $idea = Idea::factory()->create([
            'title'=> 'My First Idea',
            'description'=> 'Description of my first idea',
        ]);

        /**act**/
        $response = $this->get(route('idea.show', $idea));

        /**assert**/
        $response->assertSuccessful();

        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    public function ideas_pagination_works_test(){
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();
        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(Idea::PAGINATION_COUNT + 1);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');
        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);
    }
}
