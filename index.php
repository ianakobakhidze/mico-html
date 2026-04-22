<?php
// ==============================
// 1) FORM SUBMISSION HANDLING
// ==============================
$success = false;
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_name  = trim($_POST['patient_name']  ?? '');
    $doctor_name   = trim($_POST['doctor_name']   ?? '');
    $department    = trim($_POST['department']     ?? '');
    $phone         = trim($_POST['phone']          ?? '');
    $symptoms      = trim($_POST['symptoms']       ?? '');
    $date          = trim($_POST['date']           ?? '');

    if (!$patient_name || !$doctor_name || !$department || !$phone || !$date) {
        $error = 'გთხოვთ შეავსოთ ყველა სავალდებულო ველი.';
    } else {
        // ==============================
        // 2) აქ ჩასვი მონაცემთა ბაზის კოდი
        // ==============================
        /*
            მაგალითი PDO-თი:

            $pdo = new PDO('mysql:host=localhost;dbname=YOUR_DB;charset=utf8', 'USER', 'PASSWORD');
            $stmt = $pdo->prepare("
                INSERT INTO appointments (patient_name, doctor_name, department, phone, symptoms, appointment_date)
                VALUES (:patient_name, :doctor_name, :department, :phone, :symptoms, :date)
            ");
            $stmt->execute([
                ':patient_name' => $patient_name,
                ':doctor_name'  => $doctor_name,
                ':department'   => $department,
                ':phone'        => $phone,
                ':symptoms'     => $symptoms,
                ':date'         => $date,
            ]);
        */

        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f2f5;
            font-family: 'DM Sans', sans-serif;
            padding: 2rem;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.08);
            padding: 3rem 3.5rem;
            width: 100%;
            max-width: 900px;
        }

        h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.4rem;
            letter-spacing: 2px;
            margin-bottom: 2.2rem;
            border-bottom: 3px solid #000;
            padding-bottom: .5rem;
            display: inline-block;
        }

        h1 span { color: #2ec4b6; }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.4rem 2rem;
            margin-bottom: 2rem;
        }

        label {
            display: block;
            font-size: .8rem;
            font-weight: 500;
            color: #444;
            margin-bottom: .45rem;
            letter-spacing: .5px;
        }

        input, select {
            width: 100%;
            padding: .75rem 1rem;
            border: 1.5px solid #d0d0d0;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: .95rem;
            color: #222;
            transition: border-color .2s, box-shadow .2s;
            appearance: none;
            background: #fff;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #2ec4b6;
            box-shadow: 0 0 0 3px rgba(46,196,182,.15);
        }

        input::placeholder { color: #2ec4b6; opacity: .7; }

        .select-wrap { position: relative; }
        .select-wrap::after {
            content: '▾';
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #2ec4b6;
            pointer-events: none;
        }

        .date-wrap { position: relative; }
        .date-wrap input[type="date"] { color: #2ec4b6; }
        .date-wrap input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(140deg);
            cursor: pointer;
        }

        .btn {
            background: #111;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: .85rem 2.5rem;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.1rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background .2s, transform .1s;
        }
        .btn:hover  { background: #2ec4b6; }
        .btn:active { transform: scale(.97); }

        .alert {
            padding: .9rem 1.2rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: .9rem;
        }
        .alert-success { background: #e6faf8; color: #1a8c83; border: 1px solid #2ec4b6; }
        .alert-error   { background: #ffeaea; color: #c0392b; border: 1px solid #e74c3c; }

        @media (max-width: 680px) {
            .grid { grid-template-columns: 1fr; }
            .card { padding: 2rem 1.5rem; }
        }
    </style>
</head>
<body>
<div class="card">

    <h1>BOOK <span>APPOINTMENT</span></h1>

    <?php if ($success): ?>
        <div class="alert alert-success">✅ ჩანაწერი წარმატებით დაიჯავშნა!</div>
    <?php elseif ($error): ?>
        <div class="alert alert-error">⚠️ <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="">

        <div class="grid">

            <!-- Patient Name -->
            <div>
                <label for="patient_name">Patient Name</label>
                <input
                    type="text"
                    id="patient_name"
                    name="patient_name"
                    value="<?= htmlspecialchars($_POST['patient_name'] ?? '') ?>"
                    required>
            </div>

            <!-- Doctor's Name -->
            <div>
                <label for="doctor_name">Doctor's Name</label>
                <div class="select-wrap">
                    <select id="doctor_name" name="doctor_name" required>
                        <option value="">Normal distribution</option>
                        <!-- ==============================
                             3) აქ ჩასვი ექიმების სია
                             მაგ. მონაცემთა ბაზიდან:

                             $docs = $pdo->query("SELECT id, name FROM doctors")->fetchAll();
                             foreach ($docs as $d) {
                                 $sel = ($_POST['doctor_name'] ?? '') == $d['id'] ? 'selected' : '';
                                 echo "<option value='{$d['id']}' {$sel}>{$d['name']}</option>";
                             }
                        ============================== -->
                        <option value="dr_jones">Dr. Jones</option>
                        <option value="dr_smith">Dr. Smith</option>
                    </select>
                </div>
            </div>

            <!-- Department -->
            <div>
                <label for="department">Department's Name</label>
                <div class="select-wrap">
                    <select id="department" name="department" required>
                        <option value="">Normal distribution</option>
                        <!-- ==============================
                             4) აქ ჩასვი დეპარტამენტების სია
                        ============================== -->
                        <option value="cardiology">Cardiology</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopedics">Orthopedics</option>
                    </select>
                </div>
            </div>

            <!-- Phone -->
            <div>
                <label for="phone">Phone Number</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="XXXXXXXXXX"
                    value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"
                    required>
            </div>

            <!-- Symptoms -->
            <div>
                <label for="symptoms">Symptoms</label>
                <input
                    type="text"
                    id="symptoms"
                    name="symptoms"
                    value="<?= htmlspecialchars($_POST['symptoms'] ?? '') ?>">
            </div>

            <!-- Date -->
            <div>
                <label for="date">Choose Date</label>
                <div class="date-wrap">
                    <input
                        type="date"
                        id="date"
                        name="date"
                        value="<?= htmlspecialchars($_POST['date'] ?? date('Y-m-d')) ?>"
                        min="<?= date('Y-m-d') ?>"
                        required>
                </div>
            </div>

        </div>

        <button type="submit" class="btn">SUBMIT NOW</button>

    </form>
</div>
</body>
</html>