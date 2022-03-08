<?php
$xml = simplexml_load_file("data/data_cv.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Sekar MK</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <?php foreach ($xml->children() as $member) : ?>
            <div class="row m-5 py-3">
                <div class="col-3 mx-2" id="profile">
                    <div class="img">
                        <img src="<?= $member->photo ?>" alt="Profile-Image" class="profile-img">
                    </div>
                    <p id="name">
                        <?= $member->name ?> <br>
                        <span id="email"><?= $member->email ?></span><br>
                    </p>
                    <p id="profession">
                        <?= $member->profession ?> <br>
                        <?= $member->profession["section"] ?> <br>
                        <span id="college"><?= $member->profession["in"] ?></span>
                    </p>
                    <hr width="100%">
                    <div class="about">
                        <p style="display: inline;">Interest</p>
                    </div>
                    <p id="programming">
                        Programming <br>
                        <?php foreach ($member->programming->children() as $lang) : ?>
                            <strong><?= $lang ?> </strong>
                        <?php endforeach ?>
                    </p>
                    <p id="hobbies">
                        Hobbies <br>
                        <?php foreach ($member->hobbies->children() as $hobby) : ?>
                            <span><?= $hobby ?> </span>
                        <?php endforeach ?>
                    </p>
                    <p id="telephone">
                        Phone Number <br>
                        <span id="phone"><?= $member->phone_number ?></span>
                    </p>
                    <div class="social-links">
                        <a href="<?= $member->facebook['url'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= $member->twitter['url'] ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?= $member->linkedin['url'] ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?= $member->github['url'] ?>"><i class="fab fa-github"></i></a>
                        <a href="<?= $member->instagram['url'] ?>"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="<?= $member->line['url'] ?>"><i class="fab fa-line"></i></a> -->
                        <a href="<?= $member->discord['url'] ?>"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="col mx-2 info-cards">
                    <div class="row">
                        <div class="col info-left">
                            <div class="row m-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            <i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Education
                                        </p>
                                        <ul>
                                            <?php foreach ($member->schools->children() as $school) : ?>
                                                <li class="tags">
                                                    <?= $school ?> <br>
                                                    <span><?= $school["grade"] ?> <span>(<?= $school["period"] ?>)</span></span>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            <i class="fas fa-users stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Organizations
                                        </p>
                                        <ul>
                                            <?php foreach ($member->organizations->children() as $organization) : ?>
                                                <li class="tags">
                                                    <?= $organization ?> <br>
                                                    <span><?= $organization["position"] ?> <span>(<?= $organization["period"] ?>)</span></span>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col info-right">
                            <div class="row m-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            <i class="fas fa-award stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Achievements
                                        </p>
                                        <ul>
                                            <?php foreach ($member->achievements->children() as $achievement) : ?>
                                                <li class="tags">
                                                    <?= $achievement ?>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            <i class="fas fa-briefcase stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Courses
                                        </p>
                                        <ul>
                                            <?php foreach ($member->courses->children() as $course) : ?>
                                                <li class="tags">
                                                    <?= $course ?> <br>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <!-- Profile Side Bar -->

    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>