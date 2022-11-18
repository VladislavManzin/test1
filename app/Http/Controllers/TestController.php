<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller { 
public function showTest() { 
return 'TestController'; 
} 
function show($param) { 
			return $param; 
}	 
}

