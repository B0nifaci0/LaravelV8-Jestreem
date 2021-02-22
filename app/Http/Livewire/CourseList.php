<?php
/* al ejecutar el comando make:livewire genera una carpeta en donde se alojan nuestros componentes en app http livewire donde genera 
una clase que lo que hace es renderear nuestro componente  en este caso es classCourseList
*/
namespace App\Http\Livewire;
/* mandamos a invocar a nuestro modelo de curso */
use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        /* se retorna nuestro componente aqui podemos pasar una consulta por que al ser una vista 
        podemos pasar elementos cualquir consulta */
        return view('livewire.course-list', [
            /* hacemos nuestra consulta en donde decimos traeme los ultimos con usuarios 
             quiero que me traigas 9 elementos */
            'courses' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
