<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PalindromeCheckController extends Controller
{
    public function index() : View
    {
        $palindromes = array();
        return view('example-1', compact('palindromes'));
    }

    public function findPalindromes($text): array
    {
        $words = explode(' ', $text);
        $palindromes = array();

        foreach ($words as $word) {
            $cleaned_word = preg_replace('/[^a-zA-Z]/', '', $word);
            if (strlen($cleaned_word) > 1 && strtolower($cleaned_word) == strtolower(strrev($cleaned_word))) {
                $palindromes[] = $word;
            }
        }
        return $palindromes;
    }

    public function store(Request $request): string
    {
        $text = $request->text;

        $palindromes = $this->findPalindromes($text);

        if(empty($palindromes)) {
            $palindromes = array();
        }
        return view('example-1', compact('palindromes'));

    }
}
