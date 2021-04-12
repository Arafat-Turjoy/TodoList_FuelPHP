<?php

class Controller_Projects extends Controller_Template
{
	
	public function action_index()
	{ 
        $projects = Model_Project::find('all');
        $data = array('projects' => $projects);
        $this->template->title = 'Blog Post';
        $this->template->content = View::forge('projects/index', $data);
    }
    public function action_add()
	{

        if (isset($_POST["submit"])){
        
        

            $project = new Model_Project();
            $project->category = $_POST['category'];
            $project->title = $_POST['title'];
            $project->status = (!empty($_POST['status']));

            $project-> save();

            Session::set_flash('success','Post Added');
            Response:: redirect('/');

        }

        $data = array();
        $this->template->title = 'Add Post';
        $this->template->content = View::forge('projects/add', $data);
        
    }
    
    public function action_edit($id)
	{

        if (isset($_POST["submit"])){
        
        

            $project = Model_Project::find($_POST['project_id']);
            $project->category = $_POST['category'];
            $project->title = $_POST['title'];
            $project->status = (isset($_POST['status']));
           


        
           
            $project-> save();

            Session::set_flash('success','Post Updated');
            Response:: redirect('/');

        }
       

        $project = Model_Project::find('first', array(

            'where' => array(
                'id' => $id,
            )

            ));

        $data = array('project'=> $project);
        $this->template->title = 'Edit Post';
        $this->template->content = View::forge('projects/edit', $data);
        
        
    }
    
    public function action_delete($id)
	{

        $project = Model_Project::find($id);
        $project -> delete();

        Session::set_flash('success','Post Deleted');
        Response:: redirect('/');

        
        
	}


	
	
}

