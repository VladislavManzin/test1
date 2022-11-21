<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\GitController; 
class GitController extends Controller 
{
    public function asdf() 
    { 
        return public('git.git', ['']); 
    } 
}
?>