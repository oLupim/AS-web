<?php
 
namespace App\Policies;

use App\Models\Livro;
use App\Models\Post;
use App\Models\User;
 
class LivroPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     */
    public function create(?User $user): bool
   {
       return !is_null($user);
   }
    public function delete(?User $user): bool
   {
       return !is_null($user);
   }
   /**
    * Determine if the given post can be updated by the user.
    */
   public function update(?User $user): bool
   {
       return !is_null($user);
   }
}