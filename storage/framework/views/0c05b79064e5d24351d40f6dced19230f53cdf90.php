
<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-4">Search Results</h1>

    <h2 class="text-lg font-bold mb-2">Customers</h2>
    <?php if(!empty($customers)): ?>
    <?php if(count($customers) > 0): ?>
        <ul class="list-disc pl-4 mb-4">
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p class="text-gray-500">No customers found.</p>
    <?php endif; ?>
<?php else: ?>
    <p class="text-gray-500">Customers not available.</p>
<?php endif; ?>

<h2 class="text-lg font-bold mb-2">Tickets</h2>
<?php if(!empty($tickets)): ?>
    <?php if(count($tickets) > 0): ?>
        <ul class="list-disc pl-4 mb-4">
            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($ticket->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p class="text-gray-500">No tickets found.</p>
    <?php endif; ?>
<?php else: ?>
    <p class="text-gray-500">Tickets not available.</p>
<?php endif; ?>

<h2 class="text-lg font-bold mb-2">Payments</h2>
<?php if(!empty($payments)): ?>
    <?php if(count($payments) > 0): ?>
        <ul class="list-disc pl-4 mb-4">
            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($payment->transaction_code); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p class="text-gray-500">No payments found.</p>
    <?php endif; ?>
<?php else: ?>
    <p class="text-gray-500">Payments not available.</p>
<?php endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lmns\lime\resources\views/search.blade.php ENDPATH**/ ?>