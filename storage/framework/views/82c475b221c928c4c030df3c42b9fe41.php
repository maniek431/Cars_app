<!DOCTYPE html>
<html>
<head>
    <title>Lista Samochodów</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .actions form {
            display: inline;
        }
        .negative {
            color: red;
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
            <?php echo e(__('Lista Samochodów')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <?php if(session('success')): ?>
        <div>
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div>
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Kolor</th>
                <th>Data produkcji</th>
                <th>Przebieg</th>
                <th>Pojemność silnika</th>
                <th>VIN</th>
                <th>Cena</th>
                <th>Stan</th>
                <th>Opis stanu</th>
                <th>Typ</th>
                <th>Link do zdjęć</th>
                <th>Data utworzenia</th>
                <th>Termin</th>
                <th>Pozostało dni</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($car->Producent); ?></td>
                    <td><?php echo e($car->Model); ?></td>
                    <td><?php echo e($car->Kolor); ?></td>
                    <td><?php echo e($car->Data_produkcji); ?></td>
                    <td><?php echo e($car->Przebieg); ?></td>
                    <td><?php echo e($car->Pojemnosc_silnika); ?></td>
                    <td><?php echo e($car->VIN); ?></td>
                    <td><?php echo e($car->Cena); ?></td>
                    <td><?php echo e($car->Stan); ?></td>
                    <td><?php echo e($car->Opis_stanu); ?></td>
                    <td><?php echo e($car->Typ); ?></td>
                    <td><a href="<?php echo e($car->Link_do_zdjec); ?>"><?php echo e($car->Link_do_zdjec); ?></a></td>
                    <td><?php echo e($car->Data_utworzenia); ?></td>
                    <td><?php echo e($car->Termin); ?></td>
                    <td class="<?php echo e($car->Pozostalo < 0 ? 'negative' : ''); ?>"><?php echo e($car->Pozostalo); ?></td>
                    <td class="actions">
                        <a href="<?php echo e(route('cars.edit', $car->id)); ?>">Edytuj</a>
                        <form action="<?php echo e(route('cars.delete', $car->VIN)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

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
</html><?php /**PATH C:\Users\manie\Desktop\laravel_app1\app1\resources\views/cars/index.blade.php ENDPATH**/ ?>