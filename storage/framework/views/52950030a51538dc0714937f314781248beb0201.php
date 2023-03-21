<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-stone-900 w-full ">
        <h1 class="text-2xl font-bold mb-4">ALL Results</h1>
     <?php if(count($search_results ?? []) > 0): ?>
            <h2 class="text-lg font-bold mb-2">Customers</h2>
        <?php if(!empty($search_results['customers'])): ?>
            <table class="table-auto w-full border-separate border border-slate-500">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-separate border border-slate-500">First Name</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Last Name</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Username</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $search_results['customers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($customer->first_name); ?></td>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($customer->last_name); ?></td>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($customer->username); ?></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-gray-500">No customers found.</p>
        <?php endif; ?>
        
        <?php if(!empty($search_results['tickets'])): ?>
        <h2 class="text-lg font-bold mb-2">Tickets</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-separate border border-slate-500">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-separate border border-slate-500">Title</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Description</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Username</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $search_results['tickets']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($ticket->title); ?></td>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($ticket->description); ?></td>
                            <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($ticket->customer->username); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-gray-500">No tickets found.</p>
    <?php endif; ?>
    <?php if(!empty($search_results['payments'])): ?>
    <h2 class="text-lg font-bold mb-2">Payments</h2>
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-separate border border-slate-500">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-separate border border-slate-500">Customer ID</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">First Name</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Last Name</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Transaction Code</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Amount</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $search_results['payments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->customer_id); ?></td>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->first_name); ?></td>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->last_name); ?></td>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->transaction_code); ?></td>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->amount); ?></td>
                        <td class="border px-4 py-2 border-separate border border-slate-500"><?php echo e($payment->transaction_date); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="text-gray-500">No payments found.</p>
<?php endif; ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lmns\lime\resources\views/dashboard.blade.php ENDPATH**/ ?>