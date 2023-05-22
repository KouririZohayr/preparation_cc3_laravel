<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Post;
class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    public function testShow()
{
        // Créer un exemple de modèle pour le test

        // Envoyer une requête GET à l'URL de l'exemple
        $response = $this->get('/Post/' . $example->id);
        // Vérifier que la réponse a un code de statut 200 (OK)
        $response->assertStatus(200);
        // Vérifier que la vue renvoyée contient les données de l'exemple
       /*  $response->assertSee($example->name);
        $response->assertSee($example->description); */

}
}
