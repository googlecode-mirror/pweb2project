package ar.edu.unlam.tallerwebI.tp1;

import org.junit.Assert;
import org.junit.Test;

public class AlumnoTest {

	@Test
	public void testCalificarPrimerParcial(){
		Alumno materia = new Alumno();
		materia.calificarPrimerParcial(5);
		Assert.assertTrue(5 == materia.getPrimerParcial());
	}
	
	@Test
	public void testCalificarSegundoParcial(){
		Alumno materia = new Alumno();
		materia.calificarSegundoParcial(8);
		Assert.assertTrue(8 == materia.getSegundoParcial());
	}
	
	@Test
	public void testEstaAprobado(){
		Alumno materia = new Alumno();
		materia.calificarPrimerParcial(2);
		materia.calificarSegundoParcial(8);
		Assert.assertFalse(materia.estaAprobado());
		
		materia.calificarPrimerParcial(4);
		Assert.assertTrue(materia.estaAprobado());
	}
	
	@Test
	public void testEstaPromocionado(){
		Alumno materia = new Alumno();
		materia.calificarPrimerParcial(2);
		materia.calificarSegundoParcial(8);
		Assert.assertFalse(materia.estaPromocionado());
		
		materia.calificarPrimerParcial(4);
		Assert.assertFalse(materia.estaPromocionado());
		
		materia.calificarPrimerParcial(10);
		Assert.assertTrue(materia.estaPromocionado());
	}
}
