<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          <li class="nav-item">
            <a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>" href="index.php">
              <i class="la la-dashboard"></i>
               <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
             </a>
          </li>
          <li class="nav-item">
            <a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'calendar.php'){echo 'active'; }else { echo ''; } ?>" href="calendar.php">
              <i class="ft-calendar"></i>
               <span class="menu-title" data-i18n="Calendar">Calendar</span>
             </a>
          </li>

          <li class="nav-item"><a href="#"><i class="ft-shopping-cart success"></i>
          <span class="menu-title" data-i18n="Order">Order</span></a>
            <ul class="menu-content">
              <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-order.php'){echo 'active'; }else { echo ''; } ?>" href="add-order.php"><i></i>
              <span data-i18n="Vertical">Add Order</span></a>
              </li>
              <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-orders.php'){echo 'active'; }else { echo ''; } ?>" href="all-orders.php"><i></i>
              <span data-i18n="Vertical">View/Edit Orders</span></a>
              </li>
             </ul>
           </li>
        
          <li class=" nav-item"><a href="#"><i class="ft-users"></i>
          <span class="menu-title" data-i18n="customers">Customers</span></a>
            <ul class="menu-content">
              <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-customer.php'){echo 'active'; }else { echo ''; } ?> menu-item" href="add-customer.php"><i></i>
              <span data-i18n="Vertical">Add Customer</span></a>
              </li>
              <li><a class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-customers.php'){echo 'active'; }else { echo ''; } ?> menu-item" href="all-customers.php"><i></i>
              <span data-i18n="Vertical">View/Edit Customers</span></a>
              </li>
             </ul>
           </li>

           <li class=" nav-item"><a href="#"><i class="la la-group"></i><span class="menu-title" data-i18n="staff management">Staff Management</span></a>
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="staff">Staff</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-staff.php'){echo 'active'; }else { echo ''; } ?>" href="add-staff.php"><i></i><span data-i18n="add staff">Add Staff</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-staff.php'){echo 'active'; }else { echo ''; } ?>" href="all-staff.php"><i></i><span data-i18n="all staff">View/Edit Staff</span></a>
                      </li>
                    </ul>
                  </li>
                  <!-- <li><a class="menu-item" href="#"><i></i><span data-i18n="salary">Pay Salary</span></a>
                  </li> -->
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="designation">Designation</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-designation.php'){echo 'active'; }else { echo ''; } ?>" href="add-designation.php"><i></i><span data-i18n="add designation">Add Designation</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-designation.php'){echo 'active'; }else { echo ''; } ?>" href="all-designation.php"><i></i><span data-i18n="View Designation">View/Edit Designation</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

             <li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="expense management">Expense Management</span></a>
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="expense">Expense</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-expense.php'){echo 'active'; }else { echo ''; } ?>" href="add-expense.php"><i></i><span data-i18n="add expense">Add Expense</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-expense.php'){echo 'active'; }else { echo ''; } ?>" href="all-expense.php"><i></i><span data-i18n="all expense">View/Edit Expense</span></a>
                      </li>
                    </ul>
                  </li>
                 
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="category">Expense Category</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-expense-category.php'){echo 'active'; }else { echo ''; } ?>" href="add-expense-category.php"><i></i><span data-i18n="add expense category">Add Expense Category</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-expense-category.php'){echo 'active'; }else { echo ''; } ?>" href="all-expense-category.php"><i></i><span data-i18n="View Category">View/Edit Expense Category</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

            <li class=" nav-item">
              <a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="income management">Income Management</span></a>
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="income">Income</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-income.php'){echo 'active'; }else { echo ''; } ?>" href="add-income.php"><i></i><span data-i18n="add income">Add Income</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-income.php'){echo 'active'; }else { echo ''; } ?>" href="all-income.php"><i></i><span data-i18n="all income">View/Edit Income</span></a>
                      </li>
                    </ul>
                  </li>
                 
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="category">Income Category</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-income-category.php'){echo 'active'; }else { echo ''; } ?>" href="add-income-category.php"><i></i><span data-i18n="add income category">Add Income Category</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-income-category.php'){echo 'active'; }else { echo ''; } ?>" href="all-income-category.php"><i></i><span data-i18n="View income Category">View/Edit Income Category</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
            </li>   

            <li class=" nav-item">
              <a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="measurement">Measurement Settings</span></a>
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="cloth">Cloth Type</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-cloth-type.php'){echo 'active'; }else { echo ''; } ?>" href="add-cloth-type.php"><i></i><span data-i18n="cloth type">Add Cloth Type</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all-cloth-types.php'){echo 'active'; }else { echo ''; } ?>" href="all-cloth-types.php"><i></i><span data-i18n="clothes">View/Edit Cloth Type</span></a>
                      </li>
                    </ul>
                  </li>
                 
                  <li>
                    <a class="menu-item" href="#"><i></i><span data-i18n="parts">Measurement Parts</span></a>
                    <ul class="menu-content">
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'setmeasurement.php'){echo 'active'; }else { echo ''; } ?>" href="setmeasurement.php"><i></i><span data-i18n="set parts">Set Measurement Parts</span></a>
                      </li>
                      <li><a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'measurement-parts.php'){echo 'active'; }else { echo ''; } ?>" href="measurement-parts.php"><i></i><span data-i18n="view measurement parts">View/Edit Measurement Parts</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
            </li>  

           <li class=" nav-item">
              <a href="#"><i class="la la-gear"></i><span class="menu-title" data-i18n="general settings">General Settings</span></a>
                <ul class="menu-content">
                  <li>
                    <a class="menu-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'settings.php'){echo 'active'; }else { echo ''; } ?>" href="settings.php"><i></i><span data-i18n="settings">Settings</span></a>
                    
                  </li>                  
                </ul>
            </li>   
          
          <li class="nav-item"><a href="logout.php" target="_blank"><i class="ft-power danger"></i>
          <span class="menu-title" data-i18n="Documentation">Logout</span></a>
          </li>
        </ul>
      </div>
    </div>