
    <div id="container">
                    <div class="sidebar">
                                <a class="btn_create" href="create.html">发布新职位</a>
                                 <dl class="company_center_aside">
        <dt>我的信息</dt>
        <dd>
        <a href="<?php echo e(URL::to('company_mymessage')); ?>">我的信息</a> 
            </dd>
    <dd <?php if($status == 6): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('company_my_message')); ?>">完善/修改信息</a>
    </dd>
</dl>
                                <dl class="company_center_aside">
        <dt>我收到的简历</dt>
        <dd <?php if($status == 1): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('labelresume')); ?>">待处理简历</a> 
        <?php if($status == 1): ?>
        <span><?php echo e($count); ?></span>
        <?php endif; ?>
            </dd>
    <dd <?php if($status == 2): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('notice')); ?>">已通知面试简历</a>
        <?php if($status == 2): ?>
        <span><?php echo e($count); ?></span>
        <?php endif; ?>
    </dd>
    <dd <?php if($status == 3): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('unnotice')); ?>">不合适简历</a>
        <?php if($status == 3): ?>
        <span><?php echo e($count); ?></span>
        <?php endif; ?>
    </dd>
</dl>
<dl class="company_center_aside">
        <dt>我发布的职位</dt>
            <dd <?php if($status == 4): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('effective')); ?>">有效职位</a>
        <?php if($status == 4): ?>
        <span><?php echo e($count); ?></span>
        <?php endif; ?>
    </dd>
    <dd <?php if($status == 5): ?> class="current" <?php endif; ?>>
        <a href="<?php echo e(URL::to('online')); ?>">已下线职位</a>
        <?php if($status == 5): ?>
        <span><?php echo e($count); ?></span>
        <?php endif; ?>
    </dd>
    </dl>
            </div>