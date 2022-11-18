<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Employees extends Controller 
{
 private $employees; 
 public function __construct()
 /*{
		{
			$this->employees = [ 
				1 => [ 
						'name' => 'user1', 
						'surname' => 'surname1', 
						'salary' => 1000, 
		    			], 
				2 => [ 	
						'name' => 'user2', 
						'surname' => 'surname2', 								
						'salary' => 2000, 
						], 
				3 => [ 
					    'name' => 'user3', 
					    'surname' => 'surname3', 
				     	'salary' => 3000, 
				      	], 
				4 => [ 
						'name' => 'user4', 
						'surname' => 'surname4', 								
						'salary' => 4000, 
					    ], 
				5 => [ 
						'name' => 'user5', 
						'surname' => 'surname5', 	
						'salary' => 5000, 
		    			], 
				];

}
public function showOne($id)
		{
			return  $this->employees[$id];
		}
		public function showField($id, $name)
		{
			return $this->employees[$id][$name];
		}

public function showT() 
{ 
return view('test.show', ['class' => 'rr']); 
} 

public function foreach()
{
return view('test.show', [
	'yyy' => [4, 9, 25]
]);
}
public function arr()
{
return view('test.show', [
	'arr' => [[1, 2, 3, 4 ,5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15], [16, 17, 18, 19, 20], [21, 22, 23, 24, 25]]
]);
}} 
дз
7.14
    @foreach ($employees as $arr)
    @if ($loop->remaining >= 0 && $loop->remaining <= 2)
    <i>{{ $loop->iteration }} | {{ $arr['salary'] }}</i>
    @else
    <b>{{ $loop->iteration }} | {{ $arr['salary'] }}</b>
    @endif
    @endforeach
	*/
  {
   $this->employees = 
   [
	'title' => 'abcd'
   ];		
 }
 public function blade() 
{ 
return view('layouts.app', ['employees' => $this->employees]); 
} 
}
?>
    
