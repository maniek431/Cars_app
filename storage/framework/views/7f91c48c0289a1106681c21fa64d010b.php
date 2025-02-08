<!DOCTYPE html>
<html>
<head>
    <title>Aktualizuj Samochód</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container div {
            margin-bottom: 15px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container input[type="url"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-container button {
            background-color:rgb(0, 0, 0);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color:rgb(0, 0, 0);
        }
        @media (max-width: 600px) {
            .form-container {
                padding: 10px;
            }
            .form-container label,
            .form-container input,
            .form-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Aktualizuj Samochód')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
<div class="form-container">
    <form action="<?php echo e(route('cars.update', $car->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div>
            <center><label for="Producent">Producent:</label></center>
            <center><input type="text" id="Producent" name="Producent" value="<?php echo e(old('Producent', $car->Producent)); ?>"></center>
        </div>
        <div>
            <center><label for="Model">Model:</label></center>
            <center><input type="text" id="Model" name="Model" value="<?php echo e(old('Model', $car->Model)); ?>"></center>
        </div>
        <div>
            <center><label for="Kolor">Kolor:</label></center>
            <center><input type="text" id="Kolor" name="Kolor" value="<?php echo e(old('Kolor', $car->Kolor)); ?>"></center>
        </div>
        <div>
            <center><label for="Data_produkcji">Data produkcji:</label></center>
            <center><input type="date" id="Data_produkcji" name="Data_produkcji" value="<?php echo e(old('Data_produkcji', $car->Rok_produkcji)); ?>"></center>
        </div>
        <div>
            <center><label for="Przebieg">Przebieg:</label></center>
            <center><input type="text" id="Przebieg" name="Przebieg" value="<?php echo e(old('Przebieg', $car->Przebieg)); ?>"></center>
        </div>
        <div>
            <center><label for="Pojemnosc_silnika">Pojemność silnika:</label></center>
            <center><input type="text" id="Pojemnosc_silnika" name="Pojemnosc_silnika" value="<?php echo e(old('Pojemnosc_silnika', $car->Pojemnosc_silnika)); ?>"></center>
        </div>
        <div>
            <center><label for="VIN">VIN:</label></center>
            <center><input type="text" id="VIN" name="VIN" value="<?php echo e(old('VIN', $car->VIN)); ?>"></center>
        </div>
        <div>
            <center><label for="Cena">Cena:</label></center>
            <center><input type="text" id="Cena" name="Cena" value="<?php echo e(old('Cena', $car->Cena)); ?>"></center>
        </div>
        <div>
            <center><label for="Stan">Stan:</label></center>
            <center><input type="text" id="Stan" name="Stan" value="<?php echo e(old('Stan', $car->Stan)); ?>"></center>
        </div>
        <div>
            <center><label for="Opis_stanu">Opis stanu:</label></center>
            <center><input type="text" id="Opis_stanu" name="Opis_stanu" value="<?php echo e(old('Opis_stanu', $car->Opis_stanu)); ?>"></center>
        </div>
        <div>
            <center><label for="Typ">Typ:</label></center>
            <center><input type="text" id="Typ" name="Typ" value="<?php echo e(old('Typ', $car->Typ)); ?>"></center>
        </div>
        <div>
            <center><label for="Link_do_zdjec">Link do zdjęć:</label></center>
            <center><input type="url" id="Link_do_zdjec" name="Link_do_zdjec" value="<?php echo e(old('Link_do_zdjec', $car->Link_do_zdjec)); ?>"></center>
        </div>
        <div>
            <center><label for="Data_utworzenia">Data utworzenia:</label></center>
            <center><input type="date" id="Data_utworzenia" name="Data_utworzenia" value="<?php echo e(old('Data_utworzenia', $car->Data_utworzenia)); ?>"></center>
        </div>
        <div>
            <center><label for="Termin">Termin:</label></center>
            <center><input type="date" id="Termin" name="Termin" value="<?php echo e(old('Termin', $car->Termin)); ?>"></center>
        </div>
        <center><button type="submit">Aktualizuj Samochód</button></center>
    </form>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\manie\Desktop\laravel_app1\app1\resources\views/update.blade.php ENDPATH**/ ?>