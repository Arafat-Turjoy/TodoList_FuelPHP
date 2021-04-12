<?php
class Controller_Todoform extends Controller
{
	public function action_index()
	{
		return Response::forge(View::forge('todoform/index.html'));
    }
    public function action_add()
	{
        return Response::forge(View::forge('todoform/add.html'));
        
    }
    

    public function action_edit($id)
	{
		if ($_POST!=null){
        
        

            $project = Model_Project::find($_POST['id']);
            $project->category = $_POST['category'];
            $project->title = $_POST['title'];
            $project->status = $_POST['status'];
           


        
           
            $project-> save();

            // Session::set_flash('success','Post Updated');
            // Response:: redirect('/');

		}
		$project = Model_Project::find('first', array(

            'where' => array(
                'id' => $id,
            )

            ));

        $data = array('project'=> $project);

		return Response::forge(View::forge('todoform/edit.html',$data));
	}

}