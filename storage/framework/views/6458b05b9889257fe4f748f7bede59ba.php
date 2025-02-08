<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Samochód</title>
</head>
<body onload="setCursorToStart()">

<style>
    .opis {
        width: 300px;
        height: 200px;
        border: 1px solid #000;
        text-align: left;
        font-family: Arial, sans-serif; 
        font-size: 12px;
        font-weight: normal;
        margin: 0;
        padding: 8px; 
        overflow: auto;
        vertical-align: top;
        display: block;
    }
    .text_error {
        color: red;
        font-size: 15px;
    }
    .dodaj {
        background-color: rgb(68, 68, 68);
        border: 2px solid rgb(0, 0, 0);
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        cursor: pointer;
    }
</style>
<script>
        function setCursorToStart() {
        var opisField = document.getElementById('Opis_stanu');
        if (opisField) {
            opisField.focus();
            opisField.setSelectionRange(0, 0);
        }
    }
    </script>
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
            <?php echo e(__('Dodaj samochód:')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <center><li><div class="text_error"><?php echo e($error); ?></div></li></center>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <form action="<?php echo e(route('cars.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <center><label for="Producent">Producent</label></center>
            <center><input type="text" id="Producent" name="Producent" value="<?php echo e(old('Producent')); ?>"></center>
        </div>
        <div>
            <center><label for="Model">Model</label></center>
            <center><input type="text" id="Model" name="Model" value="<?php echo e(old('Model')); ?>"></center>
        </div>
        <div>
            <center><label for="Kolor">Kolor</label></center>
            <center><input type="text" id="Kolor" name="Kolor" value="<?php echo e(old('Kolor')); ?>"></center>
        </div>
        <div>
            <center><label for="Rok_produkcji">Data produkcji:</label></center>
            <center><input type="date" id="Data_produkcji" name="Data_produkcji" value="<?php echo e(old('Data_produkcji')); ?>"></center>
        </div>
        <div>
            <center><label for="Przebieg">Przebieg:</label></center>
            <center><input type="text" id="Przebieg" name="Przebieg" value="<?php echo e(old('Przebieg')); ?>"></center>
        </div>
        <div>
            <center><label for="Pojemnosc_silnika">Pojemność silnika:</label></center>
            <center><input type="text" id="Pojemnosc_silnika" name="Pojemnosc_silnika" value="<?php echo e(old('Pojemnosc_silnika')); ?>"></center>
        </div>
        <div>
            <center><label for="VIN">VIN:</label></center>
            <center><input type="text" id="VIN" name="VIN" value="<?php echo e(old('VIN')); ?>"></center>
        </div>
        <div>
            <center><label for="Cena">Cena:</label></center>
            <center><input type="text" id="Cena" name="Cena" value="<?php echo e(old('Cena')); ?>"></center>
        </div>
        <div>
            <center><label for="Stan">Stan:</label></center>
            <center><select id="Stan" name="Stan">
                <option value="OK" <?php echo e(old('Stan') == 'OK' ? 'selected' : ''); ?>>OK</option>
                <option value="do naprawy" <?php echo e(old('Stan') == 'do naprawy' ? 'selected' : ''); ?>>do naprawy</option>
                <option value="naprawa" <?php echo e(old('Stan') == 'naprawa' ? 'selected' : ''); ?>>naprawa</option>
            </select></center>
        </div>
        <div>
            <center><label for="Opis_stanu">Opis stanu:</label></center>
            <center><input type="text" class="opis" id="Opis_stanu" name="Opis_stanu" value="<?php echo e(old('Opis_stanu')); ?>"></center>
        </div>
        <div>
            <center><label for="Typ">Typ:</label></center>
            <center><select id="Typ" name="Typ">
                <option value="osobowy" <?php echo e(old('Typ') == 'osobowy' ? 'selected' : ''); ?>>osobowy</option>
                <option value="dostawczy" <?php echo e(old('Typ') == 'dostawczy' ? 'selected' : ''); ?>>dostawczy</option>
                <option value="ciezarowy" <?php echo e(old('Typ') == 'ciezarowy' ? 'selected' : ''); ?>>ciezarowy</option>
            </select></center>
        </div>
        <div>
            <center><label for="Link_do_zdjec">Link do zdjęć:</label></center>
            <center><input type="url" id="Link_do_zdjec" name="Link_do_zdjec" value="<?php echo e(old('Link_do_zdjec')); ?>"></center>
        </div>
        <div>
            <center><label for="Data_utworzenia">Data utworzenia:</label></center>
            <center><input type="date" id="Data_utworzenia" name="Data_utworzenia" value="<?php echo e(old('Data_utworzenia')); ?>"></center>
        </div>
        <div>
            <center><label for="Termin">Termin:</label></center>
            <center><input type="date" id="Termin" name="Termin" value="<?php echo e(old('Termin')); ?>"></center>
        </div>
        <center><button type="submit" class="dodaj">Dodaj Samochód</button></center>
    </form>
    <?php if($errors->any()): ?>
    <?php endif; ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                </div>
            </div>
        </div>
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
</html><?php /**PATH C:\Users\manie\Desktop\laravel_app1\app1\resources\views/cars.blade.php ENDPATH**/ ?>