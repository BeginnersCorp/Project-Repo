<?php require_once "../Data Layer/admin_data_access.php"; ?>
<?php
    function addAdmin($member){
        return addAdminToDB($member);
    }
    
    function editAdmin($member){
        return editAdminToDB($member);
    }
    
    function deleteAdmin($memberId){
        return deleteAdminFromDB($memberId);
    }
    
    function getAllAdmins(){
        return getAllAdminsFromDB();
    }
    
	
	
    function getAdminById($memberId){
        return getAdminByIdFromDB($memberId);
    }
    
    function getAdminsByName($memberName){
        return getAdminsByNameFromDB($memberName);
    }
    
    function getAdminsByEmail($memberEmail){
        return getAdminsByEmailFromDB($memberEmail);
    }
    
    function getAdminsByNameOrEmail($key){
        return getAdminsByNameOrEmailFromDB($key);
    }
    
    function isUniqueAdminEmail($memberEmail){
        $members  = getAllAdmins();
        $isUnique = true;
        foreach($members as $member){
            if($member['Email']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
	 function changePassword($memberId){
        $members  = getAllAdmins();
        $isChange = true;
        foreach($members as $member){
            if($member['pas']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
	 }
    
    function isUniqueAdminEmailForUpdate($memberId, $memberEmail){
        $members  = getAllAdmin();
        $isUnique = true;
        foreach($members as $member){
            if($member['id']!=$memberId && $member['email']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isValidAdmin($email){
        $members = getAllAdmins();
        $isValid = false;
        foreach($members as $member){
            if($member['email']==$email){
                $isValid = true;
                break;
            }
        }
        return $isValid;
    }
?>