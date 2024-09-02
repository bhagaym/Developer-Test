<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Image;

class ImageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_image()
    {
        $data = [
            'name' => 'Test Image',
            'file_path' => 'path/to/image.jpg',
        ];

        $image = Image::create($data);

        $this->assertDatabaseHas('images', $data);
        $this->assertEquals('Test Image', $image->name);
    }
    /** @test */
    public function it_can_update_an_image()
    {
        $image = Image::factory()->create();

        $image->update(['name' => 'Updated Image Name']);

        $this->assertDatabaseHas('images', [
            'id' => $image->id,
            'name' => 'Updated Image Name',
        ]);
    }

    /** @test */
    public function it_can_delete_an_image()
    {
        $image = Image::factory()->create();

        $image->delete();

        $this->assertSoftDeleted('images', ['id' => $image->id]);
    }
}
