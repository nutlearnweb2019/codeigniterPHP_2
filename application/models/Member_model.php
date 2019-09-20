<?php
    
class Member_model extends CI_Model {

    public function insert_Member()
        {
                $config['upload_path'] = './pictures/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2000';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                $config['encrypt_name'] = TRUE;
            
            $this->load->library('upload' ,$config);                
                if( ! $this->upload->do_upload('mem_picture')){
                    echo $this->upload->display_errors();
                }
                else{
                    $data = $this->upload->data();
                    //print_r($data);
                
                    $filename_pic = $data['file_name'];
                    $data = array(

                        'mem_name' => $this->input->post('mem_name'),
                        'mem_lastName' => $this->input->post('mem_lastName'),
                        'mem_picture' => $filename_pic
                    );

                    $query = $this->db->insert('member' ,$data);
                        // if($query){
                        //     echo "Insert Data Success.";
                        // }
                        // else{
                        //     echo "Insert Data False.";
                        // }

                    }
        }

    public function update_Member()
        {
            $data = array(

                'mem_name' => $this->input->post('mem_name'),
                'mem_lastName' => $this->input->post('mem_lastName')
            );

            $this->db->where('mem_id' , $this->input->post('mem_id'));
            $query = $this->db->update('member' ,$data);

                // if($query){
                //     echo "Edit Data Success.";
                // }
                // else{
                //     echo "Edit Data False.";
                // }
        }

    public function show_member_data()
        {
            $query = $this->db->get('member');
            return $query->result();
        }

    public function show_member_inner_data()
        {
            $this->db->select('m.*,p.*');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            $query = $this->db->get();
            
            return $query->result();
        }

    public function show_member_select_by()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            $query = $this->db->get();
            
            return $query->result();
        }

    public function show_member_select_where()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name,m.mem_level');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            $this->db->where('m.mem_level','Sub');
            $query = $this->db->get();
            
            return $query->result();
        }

    public function show_member_select_whereID()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name,m.mem_level');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            $this->db->where('m.pos_id','2');
            $query = $this->db->get();
            
            return $query->result();
        }

    public function show_member_select_whereIN()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name,m.mem_level');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            $this->db->where_in('m.pos_id',array('1','4'));
            $query = $this->db->get();
            
            return $query->result();
        }

    public function show_member_select_operators()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name,m.mem_level');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            // $this->db->where('m.pos_id > 2');
            // $this->db->where('m.pos_id < 3');
            // $this->db->where('m.pos_id >= 2');
            // $this->db->where('m.pos_id <= 3');
            $this->db->where('m.pos_id <> 1');                  
            $query = $this->db->get();
            
            return $query->result();

            //เครื่องหมาย <> แปลว่า ไม่เท่ากับ n
        }

    public function show_member_select_orderBY()
        {
            $this->db->select('m.mem_id,m.mem_picture,m.mem_nickName,m.mem_name,m.mem_lastName,m.mem_dateSave,p.pos_name,m.mem_level');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id');
            // $this->db->order_by('m.pos_id','desc');
            $this->db->order_by('m.mem_name','asc');
            $query = $this->db->get();
            
            return $query->result();

            //asc คือ เรียงลำดับจากน้อยไปมาก , เรียงลำดับตัวอักษร
            //desc คือ เรียงลำดับจากมากไปน้อย
        }

    public function show_member_left_data()
        {
            $this->db->select('m.*,p.*');
            $this->db->from('member as m');
            $this->db->join('position as p', 'm.pos_id=p.pos_id', 'left');
            $query = $this->db->get();
            
            return $query->result();
        }

    public function read_for_edit($mem_id)
        {
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where('mem_id',$mem_id);

            $query = $this->db->get();
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }

    public function delete_Member($mem_id)
        {
            $this->db->delete('member' , array('mem_id' => $mem_id));

            redirect('','reflesh');
        }
}

