// $("#add_emp_od").click(function () {
//         var no = $('#table_add_emp_od tr:last td:first').find("input").val();
//         no++
//         var no_index = no++
//         $('#table_add_emp_od > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_od"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td></tr>');
//     });

$("#add_emp_od").click(function () 
    {
        var no = $('#table_add_emp_od tr:last td:first').find("input").val();
        no++;
        var no_index = no++;
        $('#table_add_emp_od > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_od' + no_index +'"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td><td><button type="button" id="btn_delete_od' + no_index + '" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt fa-sm " ></i></button></td></tr>');
        $('#btn_delete_od' + no_index + '').click(function () {
           
            $('#table_add_emp_od').each(function () {
                $('#tr_add_emp_od' + no_index + '').remove();
            });
            
        });

    });

$("#add_emp_invalidity_notice").click(function () 
    {
        var no = $('#table_add_emp_od tr:last td:first').find("input").val();
        no++;
        var no_index = no++;
        $('#table_add_emp_od > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_od' + no_index +'"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"name="empname_medical[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd_name[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration_medical[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="occupation_medical[' + no_index + ']" class="form-control"></textarea></td><td><textarea type="text" name="monthlysalary_medical[' + no_index + ']" value="" class="form-control"></textarea></td><td><button type="button" id="btn_delete_od' + no_index + '" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt fa-sm " ></i></button></td></tr>');
        $('#btn_delete_od' + no_index + '').click(function () {
           
            $('#table_add_emp_od').each(function () {
                $('#tr_add_emp_od' + no_index + '').remove();
            });
            
        });

    });

$(document).ready(function () {
	$('#completion_date').hide();
	$('select[name=jrecv]').change(function () {
		if (this.value == 'Y') {
			$('#completion_date').show();
		}
		else {
			$('#completion_date').hide();
		}
	});
});
