namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use {{ $reflection->getName() }};

class {{ $reflection->getShortName() }}Factory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = {{ $reflection->getShortName() }}::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition()
    {
        return [
@foreach($properties as $name => $property)
            '{{$name}}' => {!! $property !!},
@endforeach
        ];
    }
}
