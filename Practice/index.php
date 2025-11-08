<?php
$staffs = [
  ["Name" => "Borsha", "Department" => "Design", "Salary" =>5000],
  ["Name" => "Bipa", "Department" => "Development", "Salary" => 8500],
  ["Name" => "Moni", "Department" => "Marketing", "Salary" => 6000],
  ["Name" => "Shova", "Department" => "Design", "Salary" => 7000],
  ["Name" => "Boisakhi", "Department" => "Development", "Salary" => 9000],
  ["Name" => "Chouty", "Department" => "HR", "Salary" => 5500],
  ["Name" => "Jannat", "Department" => "Support", "Salary" => 5000],
  ["Name" => "Nabu", "Department" => "Finance", "Salary" => 7500],
  ["Name" => "Sajol", "Department" => "Design", "Salary" => 6500],
  ["Name" => "Shovon", "Department" => "Development", "Salary" => 9500],
  ["Name" => "Suchi", "Department" => "Support", "Salary" => 6000],
  ["Name" => "Nir", "Department" => "Marketing", "Salary" => 7000],
  ["Name" => "Kaosar", "Department" => "Development", "Salary" => 8000],
  ["Name" => "Showmick", "Department" => "Finance", "Salary" => 7200],
  ["Name" => "Rafi", "Department" => "Design", "Salary" => 6800],
  ["Name" => "Mahir", "Department" => "HR", "Salary" => 5600],
  ["Name" => "Sagor", "Department" => "Development", "Salary" => 8800],
  ["Name" => "Sadik", "Department" => "Marketing", "Salary" => 6400],
  ["Name" => "Mahin", "Department" => "Finance", "Salary" => 7800],
  ["Name" => "Roni", "Department" => "Support", "Salary" => 5200]
];

$totalMonthly = 0;

foreach ($staffs as $person) {
  $dailySalary = floor($person["Salary"] / 30);
  $monthlySalary = $person["Salary"];
  $yearlySalary = $person["Salary"] * 12;

  echo "{$person['Name']}:\n";
  echo "  Daily Salary: \${$dailySalary}\n";
  echo "  Monthly Salary: \${$monthlySalary}\n";
  echo "  Yearly Salary: \${$yearlySalary}\n\n";

  $totalMonthly += $monthlySalary;
}

$totalDaily = floor($totalMonthly / 30);
$totalYearly = $totalMonthly * 12;



echo "Total Daily Salary: \${$totalDaily}\n";
echo "Total Monthly Salary: \${$totalMonthly}\n";
echo "Total Yearly Salary: \${$totalYearly}\n";
