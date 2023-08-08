<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('dashboard')}}">
                    Dashboard
                </a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="submenuDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Incomes
                </a>
                <ul class="dropdown-menu" aria-labelledby="submenuDropdown">
                    <li><a class="dropdown-item" href="{{route('income')}}">Income Report</a></li>
                    <li><a class="dropdown-item" href="{{route('incomeForm')}}">Add Income</a></li>
                    <!-- Add more submenu items as needed -->
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="submenuDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Expenses
                </a>
                <ul class="dropdown-menu" aria-labelledby="submenuDropdown">
                    <li><a class="dropdown-item" href="{{route('expense')}}">Expense Report</a></li>
                    <li><a class="dropdown-item" href="{{route('expeseForm')}}">Add Expense</a></li>
                    <!-- Add more submenu items as needed -->
                </ul>
            </li>




        </ul>
    </div>
</nav>
