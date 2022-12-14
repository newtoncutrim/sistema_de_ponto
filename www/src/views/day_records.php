<main class="content">
    <?php
    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto consistente!',
        'icofont-check-alt'
    );
    include(TEMPLATE_PATH . "/messages.php")
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-around">
                <span class="record">Entrada 1: <?= $workingHours->time1 ?? '---' ?></span>
                <span class="record">Saída 1: <?= $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex justify-content-around">
                <span class="record">Entrada 2: <?= $workingHours->time3 ?? '---' ?></span>
                <span class="record">Saída 2: <?= $workingHours->time4 ?? '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout" class="btn btn-success btn-lg">
                <i class="icon icofont-check mr-1"></i>
                Bater ponto
            </a>
        </div>
    </div>

    <form class="mt-5" action="innout" method="post">
        <?php if($user->is_admin):?>
            <div class="input-group no-border">
                <input type="text" name="forcedTime" class="form-control" placeholder="informe a hora para simular o batimento">
                <button type="submit" class="btn btn-danger ml-3">Simular ponto</button>
            </div>
        <?php endif?>
    </form>

</main>