package co.edu.unbosque.valitators;
import javax.faces.application.FacesMessage;
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.validator.FacesValidator;
import javax.faces.validator.Validator;
import javax.faces.validator.ValidatorException;

@FacesValidator("validarCorreo")
public class ValidarCorreo implements Validator {

	@Override
	public void validate(FacesContext arg0, UIComponent arg1, Object arg2) throws ValidatorException {
		
		String correo = arg2.toString();
		
		if (correo.contains("@")) {
			//nada
		}else {
			FacesMessage msg = new FacesMessage("El correo debe contener al menos una @.");
			throw new ValidatorException(msg);
		}

	}

}
