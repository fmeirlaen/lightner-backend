<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 18/07/2017
 * Time: 11:01
 */

namespace TF\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TF\ApiBundle\Entity\tab_contact;

class ContactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('contact_number');
        $builder->add('contact_fs_name', TextType::class);
        $builder->add('contact_ls_name');
        $builder->add('contact_comercial_name');
        $builder->add('contact_address');
        $builder->add('contact_codpost');
        $builder->add('contact_city');
        $builder->add('contact_type');
        $builder->add('contact_vat_number');
        $builder->add('contact_amount');
        $builder->add('contact_tab_vat');
        $builder->add('contact_date_creation', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => tab_contact::class,
            'csrf_protection' => false
        ]);
    }
}