<?php $__env->startSection('body'); ?>
<div class="row m-1">
    <h3>پیام های دریافتی امروز</h3>
</div>
<div class="row m-1">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>موبایل</th>
                        <th>شماره</th>
                        <th>پیام</th>
                        <th>تاریخ ارسال</th>
                        <th>هزینه</th>
                        <th>وضعیت</th>
                    </tr>
                    <?php if(empty(!$messages)): ?>
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($message->Mobile); ?></td>
                            <td><?php echo e($message->LineNumber); ?></td>
                            <td><?php echo e($message->MessageText); ?></td>
                            <td><?php echo e($message->SendDateTime); ?></td>
                            <td><?php echo e($message->Cost); ?></td>
                            <td><?php echo e($message->DeliveryState); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </table>
                <div class="row">
                    <?php if(isset($next_page)): ?>
                        <a class="btn btn-outline-light" href="<?php echo e(route('todaysent',[ 'page_num' => $next_page ])); ?>">بعدی</a>
                    <?php endif; ?>
                    <?php if(isset($previous_page)): ?>
                        <a class="btn btn-outline-light" href="<?php echo e(route('todaysent',[ 'page_num' => $previous_page ])); ?>">قبلی</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Smsir::components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Projects\Arash Projects\api\resources\views/vendor/Smsir/todaysent.blade.php ENDPATH**/ ?>