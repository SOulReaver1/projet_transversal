<?php


require_once $_SERVER['DOCUMENT_ROOT']."/factories/abstractedFactory.php";
class main extends abstractFactory{
    function total_views($page_id = null)
    {
      if($page_id === null)
      {
        // count total website views
        $q = "SELECT sum(total_views) as total_views FROM pages";
        $stmt = $this->pdo->prepare($q);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if($result > 0)
        {
            return $result;
        }
        else
        {
          return "No records found!";
        }
      }
      else
      {
        // count specific page views
        $q = "SELECT total_views FROM pages WHERE id='$page_id'";
        $stmt = $this->pdo->prepare($q);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        $row = $stmt->fetchAll(PDO::FETCH_CLASS);
        
        if($result > 0)
        {
            if($result === null)
            {
              return 0;
            }
            else
            {
              return $result;
            }
        }
        else
        {
          return "No records found!";
        }
      }
    }

    public function is_unique_view($visitor_ip, $page_id)
    {
        $q = "SELECT * FROM page_views WHERE visitor_ip='$visitor_ip' AND page_id='$page_id'";
        $stmt = $this->pdo->prepare($q);
        $stmt->execute();
        $result = $stmt->fetchColumn();
      
      if($result > 0)
      {
        return false;
      }
      else
      {
        return true;
      }
    }

    function add_view($visitor_ip, $page_id)
    {
      if($this->is_unique_view($visitor_ip, $page_id) === true)
      {
        // insert unique visitor record for checking whether the visit is unique or not in future.
        $q = "INSERT INTO page_views (visitor_ip, page_id) VALUES ('$visitor_ip', '$page_id')";

        if($this->pdo->query($q))
        {
          // At this point unique visitor record is created successfully. Now update total_views of specific page.
          $q = "UPDATE pages SET total_views = total_views + 1 WHERE id='$page_id'";
          
          if(!$this->pdo->query($q))
          {
            echo "Error updating record: " . mysqli_error($conn);
          }
        }
        else
        {
          echo "Error inserting record: " . mysqli_error($conn);
        }
      }
    }
    function statsPages($pageStats, $total_views){
        $q = "SELECT (SELECT total_views AS pageStats FROM pages WHERE id = $pageStats) * 100 / $total_views";
        $stmt = $this->pdo->query($q);
        return $stmt->fetchColumn();
    }
}
