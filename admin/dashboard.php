<?php
session_start();
if (empty($_SESSION['admin'])) {
    @header("location:index.php?msg=You need to login first");
    exit();
}
include("nav-admin.php");
$CurrentMonth = date('F');
$CurrentDate = date('d');
$searchquery = "";

if (isset($_REQUEST['search'])) {
    $searchquery = $_REQUEST['searchQueryInput'];
    $query = "SELECT * FROM `servicescard` WHERE `title` LIKE '%$searchquery%' ";
    $row = mysqli_query($connection, $query);
} else {
    $query = "SELECT * FROM `servicescard` ORDER BY `id`";
    $row = mysqli_query($connection, $query);
}



?>
<div class="admin--dashboard--main">
    <div class="dashboard--body">
        <div class="card--holder--main">
            <div class="card--holder--body">
                <div class="block1">
                    <div class="block--heading">Service Cards</div>
                    <div class="current--date"><?php echo $CurrentMonth . ' ' . $CurrentDate; ?></div>
                </div>
                <div class="block2">
                    <form action="" style="width:100%;">
                        <div class="wrapper--searchbar">
                            <div class="searchBar">
                                <input id="searchQueryInput" type="text" autocomplete="off" name="searchQueryInput" value="<?php echo $searchquery; ?>" placeholder="Search Card title" value="" />
                                <input type="hidden" name="search" value="1">
                                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="buttonDiv">
                        <a href="dashboard.php?msg=Coming soon? may be not :("><button class="add--card--button" title="Insert Card"><i class="fa-solid fa-plus"></i> Add Card</button></a>
                    </div>
                </div>
                <div class="block3">
                    <div class="block3--body">
                        <?php
                        while ($rowarr = mysqli_fetch_array($row)) {
                        ?>
                            <div class="card">
                                <div class="line--heading">
                                    <div class="date"><?php echo $rowarr['creationDate']; ?></div>
                                    <div class="dots"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                                </div>
                                <a href="dashboard.php?CardId=<?php echo $rowarr['id']; ?>" class="hello">
                                    <div class="line--title">
                                        <div class="title"><?php echo $rowarr['title']; ?></div>
                                        <div class="counts">0 cards | 3 points</div>
                                    </div>
                                </a>
                                <div class="line--buttons">
                                    <button onclick="edit(<?php echo $rowarr['id']; ?>)" class="edit--button">
                                        Edit Card
                                    </button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>