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
        <h2 class="fw-semibold text-xl text-dark leading-tight">
            <?php echo e(__('Edit Event')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('events.update', $event)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label for="title" class="form-label"><?php echo e(__('Title')); ?></label>
                                <input id="title" class="form-control" type="text" name="title" value="<?php echo e(old('title', $event->title)); ?>" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label"><?php echo e(__('Description')); ?></label>
                                <textarea id="description" name="description" class="form-control" rows="4"><?php echo e(old('description', $event->description)); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label"><?php echo e(__('Start Date')); ?></label>
                                <input id="date" class="form-control" type="datetime-local" name="date" value="<?php echo e(old('date', $event->date->format('Y-m-d\TH:i'))); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label"><?php echo e(__('End Date')); ?></label>
                                <input id="end_date" class="form-control" type="datetime-local" name="end_date" value="<?php echo e(old('end_date', $event->end_date ? $event->end_date->format('Y-m-d\TH:i') : '')); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label"><?php echo e(__('Location')); ?></label>
                                <input id="location" class="form-control" type="text" name="location" value="<?php echo e(old('location', $event->location)); ?>" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Update Event')); ?></button>
                            </div>
                        </form>
                    </div>
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
<?php /**PATH D:\xampp\htdocs\Laravel_Incio\resources\views/events/edit.blade.php ENDPATH**/ ?>