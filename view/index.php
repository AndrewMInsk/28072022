<?php
    $result = '<div class="container">';
    if ($data['list']) {
        foreach ($data['list'] as $datum) {
            $result .= '<div class="row"><div class="col-md-8"><div class="container"><div class="row">';
            $result .= '<div class="col-md-1">'.$datum->getId() . '</div>';
            $result .= '<div class="col-md-2">'.$datum->getName() . '</div>';
            $result .= '<div class="col-md-2">'.$datum->getSurname() . '</div>';
            $result .= '<div class="col-md-1">'.\src\Human::getTextSex($datum->getSex()) . '</div>';
            $result .= '<div class="col-md-2">'.$datum->getCity() . '</div>';
            $result .= '<div class="col-md-2">'.\src\Human::getFullAge($datum->getDateOfBirth()) . '</div>';
            $result .= '</div></div></div><div class="col-md-2"><a class="btn btn-primary" href="?action=edit&id=' . $datum->getId() . '">Edit it</a></div>';
            $result .= '<div class="col-md-2"><form>
                        <input type="hidden" name="id" value="' . $datum->getId() . '">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" value="Delete it" class="btn btn-warning" >
                        </form></div>';
            $result .= '</div>';
        }
    }
    $result .= '</div>';

    echo $result;
?>

