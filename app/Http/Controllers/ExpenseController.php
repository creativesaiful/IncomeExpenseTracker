<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expensePage(){
        $expenses = Expense::where('user_id', auth()->user()->id)->paginate(10);
        return view('pages.expense', compact('expenses'));
    }


    public function expenseForm(){
        return view('pages.expense_form');
    }



    public function store(Request $request)
        {
            $validatedData = $request->validate([
                'amount' => 'required|numeric',
                'description' => 'required|string',
                'date' => 'required|date',
                'category' => 'required|string', // Add category validation rule
            ]);

            $expense = new Expense();
            $expense->user_id = auth()->user()->id;
            $expense->amount = $validatedData['amount'];
            $expense->description = $validatedData['description'];
            $expense->date = $validatedData['date'];
            $expense->category = $validatedData['category'];


            $expense->save();

            return redirect()->route('expense')->with('success', 'Expense added successfully!');
        }
}
