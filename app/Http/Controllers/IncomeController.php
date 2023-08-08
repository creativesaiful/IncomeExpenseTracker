<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function incomePage(){
        $incomes = Income::where('user_id', auth()->user()->id)->paginate(10);
        return view('pages.income', compact('incomes'));
    }

    public function incomeForm(){
        return view('pages.income_form');
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string', // Add category validation rule
        ]);

        $income = new Income();
        $income->user_id = auth()->user()->id;
        $income->amount = $validatedData['amount'];
        $income->description = $validatedData['description'];
        $income->date = $validatedData['date'];
        $income->category = $validatedData['category'];


        $income->save();

        return redirect()->route('income')->with('success', 'Income added successfully!');

    }
}
