<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 18/07/2017
 * Time: 09:49
 */

namespace TF\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TF\ApiBundle\Entity\tab_line_doc;

class LineType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('line_date', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('line_cod', TextType::class);
        $builder->add('line_description', TextType::class);
        $builder->add('line_qtt', NumberType::class);
        $builder->add('line_unit', TextType::class);
        $builder->add('line_price_unit', NumberType::class);
        $builder->add('line_disc1', TextType::class);
        $builder->add('line_vat', TextType::class);
        $builder->add('line_total', NumberType::class);
        $builder->add('line_order', TextType::class);
        $builder->add('line_date', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
        $builder->add('line_delivery_date', DateTimeType::class, ['format' => 'dd-MM-yyyy', 'widget' => 'single_text']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => tab_line_doc::class,
            'csrf_protection' => false
        ]);
    }
}