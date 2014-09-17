/**
 * 
 */
package ar.edu.unlam.tallerwebI.tp1;

/**
 * TP1
 * @author Irene Alessandrello, 28.408.504
 * @author Rosa Diaz ,23.605.718
 * @author Marcelo Conde ,32.848.659 
 *
 */
public class Alumno {

    //constructores
	public Alumno() {
		// TODO Auto-generated constructor stub
	}

	//atributos
	// int primerParcial = null; no permite inicializar int
	   Float primerParcial= null; //nota del primer parcial del alumno
	   Float segundoParcial = null;
	
	//getters y setters

	public Float getPrimerParcial() {
		return primerParcial;
	}

	public void setPrimerParcial(Float primerParcial) {
		this.primerParcial = primerParcial;
	}

	public Float getSegundoParcial() {
		return segundoParcial;
	}

	public void setSegundoParcial(Float segundoParcial) {
		this.segundoParcial = segundoParcial;
	}
	
	//metodos publicos
	
	public void calificarPrimerParcial(int nota) {
		this.setPrimerParcial(new Float(nota));
	}
	
	public void calificarSegundoParcial(int nota) {
		this.setSegundoParcial(new Float(nota));	
	}

	private Float getNotaFinal(){
		float suma =0;
		float promedio=0;
		
		if (this.getPrimerParcial() != null) 
				suma+=this.getPrimerParcial();
		if (this.getSegundoParcial() != null)
			    suma+=this.getPrimerParcial();
		
		if(suma!=0)
				promedio=suma/2;
		
	    return promedio;	
	}
	
	public boolean estaAprobado() {
		
		if (this.getNotaFinal() >= 4)
			return true;
		else
			return false;
	}

	public boolean estaPromocionado() {
		if (this.getNotaFinal() >= 7)
			return true;
		else
			return false;
	}

}
