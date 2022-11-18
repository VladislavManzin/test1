<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class PageController extends Controller { 
public function showOne() { 
return 'Медведь'; 
} 
function showAll() { 
return 'Любит мед'; 
} 
}
