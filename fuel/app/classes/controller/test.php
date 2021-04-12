<?php


class Controller_Test extends Controller_Rest
{
   protected $format = 'json';
   
    public function get_index()
	{ 
        $projects = Model_Project::find('all');
        
      
       return $this->response($projects);
    }


    public function post_add()
	{

       
       
        $flag = true;
        $error = [];
        
            
        $project = new Model_Project();
        

        

        if(isset($_POST['category']) && !empty($_POST['category'])){
            $project->category = $_POST['category'];
        }else{
            $error['category'] ="category value not set";
            $flag = false;
            
        }
        
        if(isset($_POST['title']) && !empty($_POST['title'])){
            
        $project->title = $_POST['title'];
        }else{
            $error['title'] = "title value not set";
            $flag = false;
        }

        // var_dump($_POST['status']);
        // die();

        if(isset($_POST['status']) && $_POST['status']!=null)
        {
        //    var_dump(empty($_POST['status']));
        //    die();
            

            $project->status = empty($_POST['status'])?0:1;
            // var_dump($project->status);
            // die();
            

        }else{
            $error['status'] = "status value not set";
            $flag = false;
        }
    
        
        
        
        if($flag===true){

        $project-> save();


        }

        // Session::set_flash('success','Post Added');
        // Response:: redirect('/');

        $data = array($flag, $error);
       
        
        
        return $this->response($data);

      
        

        
        
        
    }

    

    public function post_edit($id)
	{

       
        $flag = true;
        $error = [];
            
            $project = Model_Project::find($id);
            
            if(isset($_POST['category']) && !empty($_POST['category'])){
                $project->category = $_POST['category'];
            }else{
                $error['category'] ="category value not set";
                $flag = false;
                
            }

            if(isset($_POST['title']) && !empty($_POST['title'])){
                
            $project->title = $_POST['title'];
            }else{
                $error['title'] = "title value not set";
                $flag = false;
            }
            
            
            if(isset($_POST['status']) && $_POST['status']!=null)
        {
        //    var_dump($_POST['status']);
        //    die();
            

            $project->status = empty($_POST['status'])?0:1;
            // var_dump($project->status);
            // die();
            

        }else{
            $error['status'] = "status value not set";
            $flag = false;
        }


        
           
            

            // Session::set_flash('success','Post Updated');
            // Response:: redirect('/');

        
            if($flag===true){

                $project-> save();
        
        
                }

       

                $data = array($flag, $error);
        
        
        
                return $this->response($data);
        
            
        
        
    }
    
    public function post_delete($id)
	{
        

        $project = Model_Project::find($id);
        if($project!=null){
            $project -> delete();

        }
       
        // Session::set_flash('success','Post Deleted');
        // Response:: redirect('/');

        
        
	}


  
}
