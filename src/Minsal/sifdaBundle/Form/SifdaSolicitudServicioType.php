<?php

namespace Minsal\sifdaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SifdaSolicitudServicioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('fechaRecepcion')
            ->add('fechaRequiere')
            ->add('idEstado')
            ->add('idMedioSolicita')
            ->add('idDependenciaEstablecimiento')
            ->add('user')
            ->add('idTipoServicio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\sifdaBundle\Entity\SifdaSolicitudServicio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_sifdabundle_sifdasolicitudservicio';
    }
}
