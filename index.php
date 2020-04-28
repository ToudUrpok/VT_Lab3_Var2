<!DOCTYPE html>
<html>
	<head>
		<title>Lab3_Var2</title>
		<meta charset="utf-8">
        	<style type="text/css">
            		BUTTON {
                		margin-left:20px;
            		}
            		INPUT {
                		margin-left: 10px;
            		}
			#work_block {
				margin-bottom: 30px;
			}
			#message {
				color: red;
			}
			LI, h4, h3{
				color: blue;
			}
        	</style>
	</head>
	<body>
        	<h2>Работа с файлом с информацией о компаниях</h2>
		<div id="work_block">
		<form method="GET" accept-charset="utf-8">
                	<p>	
				<label for="name">name: </label>
				<input type="text" name="name" id="name" required/>
                    		<input type="submit" name="search" value="Найти"/>
                	</p>	
                	<p>	
				<label for="address">addres: </label>
				<input type="text" name="address" id="address" pattern="[^,]+"/>
                	</p>
                	<p>
				<label for="phone">phone: </label>
				<input type="tel" name="phone" id="phone" placeholder="+37529......." pattern="\+37529[0-9]{7}"/>
                	</p>
                	<p>
				<label for="email">email: </label>
				<input type="email" name="email" id="email"/>
                    		<input type="submit" name="add" value="Добавить"/>
			</p>	
		</form>
		</div>
		
        <?php
                define("FILEPATH", "companies\companies.csv");
                define("ABSENTMESS", "информация отсутствует");
        
                if (isset($_GET['add'])) {
                    $name = $_GET["name"];
                    if (!isExist($name, FILEPATH)) {
                        addCompany($name, $_GET["address"], $_GET["email"], $_GET["phone"], FILEPATH);
                    }
                }
        
                if (isset($_GET['search'])) {
                    searchByName($_GET["name"]);
                }

                printCompanies(FILEPATH);
                
                function isExist($name, $filePath)
                {
                    $companies =  getList($filePath);
                    foreach ($companies as $key => $company) {
                        if (($company != null) and (!(boolean)strcmp($key, $name))) {
                            echo "<div id='message'> Компания с названием $key уже есть ! </div>";
                            return true;
                        }
                    }
                    return false;
                }
                    
                function addCompany($name, $address, $email, $phone, $filePath)
                {
                    makeRecord($name, $address, $email, $phone, $filePath);
                    echo "<div id='message'> Данные компании $name успешно сохранены ! </div>";
                }

                function searchByName($name)
                {
                    $companies =  getList(FILEPATH);
                    $isExist = false;
                    foreach ($companies as $key => $company) {
                        if (($company != null) and ($key == $name)) { 
                            echo "<div>";
                            echo "<div id='message'> По Вашему запросу найдено : </div>";
                            echo "<ul>";

                            printInfo($key, $company);
                                
                            echo "</ul>";
                            echo "</div>";
                                
                            $isExist = true;
                            return;
                        }
                    }
                    if (!$isExist) {
                        echo "<div id='message'> По имени $name компании не найдено :( </div>";
                    }
                }

                function makeRecord($name, $address, $email, $phone, $fileName)
                {
                    if (fopen($fileName, "a")) {
                        fwrite($file, "$name, $address, $email, $phone\n");
                        fclose($file);
                    } else {
                        echo "<div id='message'> Не удалось открыть файл $fileName ! </div>";
                    }
                }

                function printCompanies($filePath)
                {
                    $companies = getList($filePath);
                    if (isset($companies)) {
                        echo "<h3> Список сохранённых компаний </h3>";
                        echo "<div>";
                            foreach ($companies as $key => $company) {
                                if ($company != null) {
                                    printInfo($key, $company);
                                }
                            }
                        echo "</div>";
                    }
                }
        
                function getList($fileName)
                {
                    $file = fopen($fileName, "rt");
                    if ($file) {
                        $companies;
                        while (!feof($file)) {
                            $fileRecord = htmlentities(fgets($file));
                            insert($companies, explode(",", $fileRecord));
                        }
                        fclose($file);
                        return $companies;
                    } else {
                        echo "<div id='message'> Не удалось открыть файл $fileName! </div>";
                    }
                }
        
                function insert(&$companies = [], $companyData = [])
                {
                    if ($companyData[0] != "") {
                        $companies[$companyData[0]] = array($companyData[1], $companyData[2], $companyData[3]);
                    }
                }
                
                function printInfo($name, $items = [])
                {
                    
                    echo "<h4>$name :</h4>";
                    echo "<ul>";
                        echo "<li>address:"; 
                            if (strlen($items[0]) > 1) {
                                echo $items[0];
                            } else {
                                echo ABSENTMESS;
                            }
                        echo "</li>";
                        echo "<li>email:";
                            if (strlen($items[1]) > 1) {
                                echo $items[1];
                            } else {
                                echo ABSENTMESS;
                            }
                        echo "</li>";
                        echo "<li>phone:";
                            if (strlen($items[2]) > 2) {
                                echo $items[2];
                            } else {
                                echo ABSENTMESS;
                            }
                        echo "</li>";
                    echo "</ul>";
                }
        ?>
	</body>
</html>
